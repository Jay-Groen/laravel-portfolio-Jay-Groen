<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class PostfeedController
{
    public function show() {

        $articles = Article::latest()->get();

        return view('postfeed', [
            'articles' => $articles
        ]);
    }
}
