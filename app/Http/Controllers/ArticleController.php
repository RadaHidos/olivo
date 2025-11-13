<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function index()
    {
        $articles = \App\Models\Article::all();

        return view('articles.index', compact('articles'));
    }

    function show(int $id)
    {

        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }
    //
}
