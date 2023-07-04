<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class PostfeedController
{
    public function index() {

        $articles = Article::latest()->get();

        return view('postfeed', compact('articles'));
    }

    public function show($id) {

        $article = Article::find($id);

        return view('articles.article', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->save();

        return redirect('articles')->with('success', 'Post created successfully.');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);

        $article->title = request('title');
        $article->body = request('body');

        $article->save();

        return redirect('articles')->with('success', 'Post created successfully.');
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->body = request('body');

        $article->delete();

        return redirect('articles');
    }
}
