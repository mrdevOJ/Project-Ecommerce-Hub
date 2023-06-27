<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)

    {
        $category = $request->input('category');
        $color = $request->input('color');
        $price = $request->input('price');
        if($category!="" &&  $color!="" && $price!="" ){
            $commands = Article::where('category', $category)->where('color',"$color" )->where('price','>=',"$price%")->orderBy('price', 'desc')->get();
        }


       elseif($price!="" && $color!=""){
            $commands = Article::where('price','>=',"$price%")->where('color',"$color" )->orderBy('price', 'asc')->get();

        }
        elseif($category!="" && $price!=""){
            $commands = Article::where('price','>=',"$price%")->where('category', $category)->orderBy('price', 'asc')->get();
        }
        elseif($category!="" && $color!=""){
            $commands = Article::where('category', $category)->where('color', $color)->orderBy('price', 'asc')->get();
        }

        elseif($price!=""){
            $commands = Article::where('price','>=',"$price%")->orderBy('price', 'asc')->get();
        }
        elseif($category!=""){
            $commands = Article::where('category', $category)->orderBy('price', 'desc')->get();
        } elseif( $color!=""){
                    $commands = Article::where('color',"$color" )->orderBy('price', 'asc')->get();

                }

        else{
            $commands =Article::all();
        }
        return view('home',[
            'article'=>$commands
        ]);
    }

    public function adminhome(){
        return view('');
    }
}
