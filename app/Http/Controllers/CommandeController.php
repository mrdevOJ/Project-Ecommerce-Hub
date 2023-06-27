<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Listproduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $index_articl = $request->input('id-article');
        $index_article=intval($index_articl);

        $id_article = Article::findOrFail($index_article);
        $prix=$id_article->price;
        $category=$id_article->category;


        $user_id=Auth::user()->id;

        $request->validate([
            'name'=>['required', 'max:50'],
            'prenom'=>['required', 'max:50'],
            'email'=>['required','email', 'max:255'],
            'adresse'=>['required', 'max:255'],
            'quantity'=>['required', 'max:4'],
            'cardNumber'=>['required','regex:/^[0-9]{16}$/'],
            'code'=>['required','regex:/^[0-9]{3}$/', 'max:3'],
            'dateExp'=>['required','after_or_equal:'.now()->format('2023-05')]

        ],
        [
            'cardNumber.required'=>'Le champ du numéro de carte est obligatoire.',
            'cardNumber.regex'=>'Il faut enter un Code banquaire  valide',
            'adresse.required'=>'Enter une adresse correcte',
            'email.email'=>"L'email doit etre correct",

        ]);
        $commande = new Listproduct();
        $commande->name=strip_tags($request->input('name'));
        $commande->prenom=strip_tags($request->input('prenom'));
        $commande->email=strip_tags($request->input('email'));
        $commande->adresse=strip_tags($request->input('adresse'));
        $commande->user_id=$user_id;
        $commande->quantity=strip_tags($request->input('quantity'));
        $commande->article_id=$index_article;
        $commande->category=$category;
        $commande->prix= $prix * strip_tags($request->input('quantity'));
        $commande->cardNumber=strip_tags($request->input('cardNumber'));
        $commande->save();
            return redirect()->route('home');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $index = Article::findOrFail($id);
        return view('commandes.show',[
            'articles'=>$index ,
            'produits1'=>Article::inRandomOrder()->take(3)->get(),
            'produits2'=>Article::inRandomOrder()->take(3)->get(),

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
