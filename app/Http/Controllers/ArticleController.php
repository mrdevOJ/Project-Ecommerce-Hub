<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{


    public function index()
    {
         return view('articles.index',[
            'article' => Article::all()
        ]);
    }


    public function create()
    {
        return view('articles.create');
    }



    public function store(Request $request)
    {
        $request ->validate([
                    'article-category' =>  ['required', 'not_in:null'],
                    'article-color' => 'required',
                    'article-src' =>'required',
                    'article-price' => ['required','integer']

        ]);

       $article = new Article();
       $article -> category = strip_tags($request->input('article-category')) ;
       $article -> color = strip_tags($request->input('article-color')) ;
       $article -> price =  strip_tags($request->input('article-price')) ;
       $article -> src = strip_tags($request->input('article-src')) ;
       $article->save();

       return redirect()->route('articles.index');
    }


    public function show($article)
    {
        // $articles = self::getarticles();


        // $index = array_search($article,array_column($articles ,'id'));

        // if($index === false) {
        //     abort(404);
        // }
        // return view('articles.show',['articles'=>$article[$index]]);
        $index = Article::findorFail($article);
                return view('articles.show',
                ['article'=>$index]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($article)
    {
        return view('articles.edit',['article'=>Article::findorFail($article)]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $article)
    {
          $request ->validate([
                    'article-category' => ['required', 'not_in:null'],
                    'article-color' => 'required',
                    'article-src' =>'required',
                    'article-price' => ['required','integer']

        ]);
       $updat = Article::findorFail($article);
        $updat -> category = strip_tags($request->input('article-category')) ;
       $updat -> color = strip_tags($request->input('article-color')) ;
       $updat -> price =  strip_tags($request->input('article-price')) ;
       $updat -> src = strip_tags($request->input('article-src')) ;
       $updat->save();

       return redirect()->route('articles.show',$article);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($article)
    {
        $delet = Article::findorFail($article);
        $delet ->delete();
        return redirect()->route('articles.index');
    }
  


}
