<?php

namespace App\Http\Controllers;

use App\Models\Listproduct;
use App\Models\Livraison;
use App\Models\Livreur;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


    $date = $request->input('date');
    $search = $request->input('search');
    $searchLivreur = $request->input('searchLivreur');
if($date!=""){
    $livraison = Livraison::where('date_livrainson', "$date%")->orderBy('id', 'asc')->get();
}
elseif($searchLivreur!=""){
    $livraison = Livraison::where('livreur_id', "$searchLivreur%")->orderBy('id', 'asc')->get();
}
elseif($search!=""){
    $livraison = Livraison::where('listproduct_id','LIKE',"$search%")->orderBy('id', 'asc')->get();
}
    elseif($date!="" && $searchLivreur!=""  && $search!="" ){
        $livraison = Livraison::where('date_livrainson', "$date%")->where('livreur_id','LIKE',"$searchLivreur%" )->where('listproduct_id','LIKE',"$search%")->orderBy('id', 'asc')->get();
    }elseif($search!=""&& $searchLivreur!=""){
        $livraison = Livraison::where('listproduct_id','LIKE',"$search%")->where('livreur_id','LIKE',"$searchLivreur%" )->orderBy('id', 'asc')->get();

    }elseif($date!=""&& $searchLivreur!=""){
        $livraison = Livraison::where('date_livrainson', "$date%")->where('livreur_id','LIKE',"$searchLivreur%" )->orderBy('id', 'asc')->get();

    }
    elseif($date!=""&& $search!=""){
        $livraison = Livraison::where('date_livrainson', "$date%")->where('id','LIKE',"$search%")->orderBy('id', 'asc')->get();

    }
    else{
            $livraison = Livraison::all();

    }
        $idListproduct = Livraison::find('listproduct_id');

        return view('livraisons.index',[
            'livraisons'=> $livraison,
            'Adresse'=>Listproduct::where('id','=',$idListproduct)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

               $index = Listproduct::findOrFail($id);
               return view('livraisons.show',
               ['command'=>$index,
                 'cin'=>Livreur::all()]);

    }
     function store(Request $request)
    {
        if(auth()->user()->email == "adminadmin@ofppt.com"){
        $request->validate([
            'cin'=>['required','not_in:null'],
            'date'=>['required','after:tomorrow'],
            'listproduct_id'=>'required|unique:livraisons'
        ],
    [
        'listproduct_id.unique'=>'Id commande déjà existe',
        'cin.not_in'=>'Il faut choisir le livreur',
        'date.after'=>'la date de livraison doit étre après 48 heure'
    ]);
         $livraison = new Livraison();
         $id_livreur = $request->input('cin');

        $livraison ->livreur_id=strip_tags($id_livreur);
        $livraison->listproduct_id= strip_tags($request->input('listproduct_id'));
        $livraison->date_livrainson= strip_tags($request->input('date'));
        $livraison->save();

          return  redirect()->route('livraisons.index');
        }else{
            return view('error');
          }

}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
