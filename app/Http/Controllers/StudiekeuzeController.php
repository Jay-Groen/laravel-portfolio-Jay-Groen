<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class StudiekeuzeController
{
    public function show($id) {

        $article = Article::find($id);

        return view('articles.studiekeuze', ['article' => $article]);
    }
}
