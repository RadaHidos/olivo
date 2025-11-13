<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index()
    {
        $articles = \App\Models\Article::all();

        return view('articles.index', compact('articles'));
    }

    function show($article)
    {
        return view('articles.show', compact('articles'));
    }
    //
}
