<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleReaquest;
use App\Models\Article;

class ArticleController extends Controller
{
   
    public function create(){
        return view('article.create');
    }
    
    public function store(ArticleReaquest $request) {
        $article = Article::create([
            'name'=>$request->name,
            'price'=>$request->price,
            // 'img' => $request-> file('img')->store('public/img'),
        ]); 
        if($request->img){
            $article->img = $request->file('img')->store('public/img');
            $article->save();
        }
  return redirect(route('card'))->with('message','ARTICOLO AGGIUNTO CON SUCCESSO ');
    }
}
