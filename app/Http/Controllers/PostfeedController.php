<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class PostfeedController
{
    public function index() {

        $articles = Article::latest()->get();

        return view('postfeed', [
            'articles' => $articles
        ]);
    }

    public function show($id) {

        $article = Article::find($id);

        return view('articles.studiekeuze', ['article' => $article]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/1');
    }
}
