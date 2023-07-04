@extends('layout')

@section('content')
    <h1 class="header-blog">Blog</h1>
    @foreach ($articles as $article)
        <div class="studiekeuze">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->body }}</p>
            <a href="{{ route('articles.show', $article) }}">GO TO ARTICLE</a>
        </div>
    @endforeach
    <br>
    <a href="/articles/create">Create Article</a>
@endsection

