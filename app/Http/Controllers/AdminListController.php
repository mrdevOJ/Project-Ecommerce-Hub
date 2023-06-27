<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listproduct;
use App\Models\Livraison;

class AdminListController extends Controller
{


    public function index(Request $request)
    {

    $date = $request->input('date');
        $search = $request->input('search');
        $email = $request->input('email');
        $select = $request->input('select');

        if($search!="" && $email!=""){
            $commands = Listproduct::where('id','LIKE',"$search%")->where('email','LIKE',"$email%" )->orderBy('id', 'asc')->get();


        }
        elseif($date!="" ){
            $commands = Listproduct::where('created_at', "$date%")->orderBy('id', 'asc')->get();
        }elseif($search!=""){
            $commands = Listproduct::where('id','LIKE',"$search%")->get();

        }
        elseif($email !=""){
            $commands = Listproduct::where('email','LIKE',"$email%" )->orderBy('id', 'asc')->get();
        }
        elseif($select!=""){
            $commands=Listproduct::where('category',"$select" )->orderBy('id', 'asc')->get();
        }
        elseif($select =="null"){

        $commands = Listproduct::all();

    }
        else{
                $commands = Listproduct::all();

        }

      return view('listproducts.index',[
        'commands'=>$commands
      ]
      );
    //   return view('listproducts.index'
    //   )->with($commands);
    }






    public function destroy($command)
    {
        $deleteCommande= Listproduct::findOrFail($command);
        $deleteLivraison = Livraison::where('listproduct_id',$command);
       $deleteCommande->delete();
        $deleteLivraison->delete();

        return redirect()->route('listproducts.index');
    }

}
