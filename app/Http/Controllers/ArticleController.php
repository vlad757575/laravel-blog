<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {

        $articles = Article::paginate(6);


        return view('articles/index', [
            'articles' => $articles
        ]);
    }

    public function show($slug)
    {
        $articles = Article::where('slug', $slug)->firstOrFail();

        return view('articles/show', [
            'article' => $articles
        ]);
    }
}
