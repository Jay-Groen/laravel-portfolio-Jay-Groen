@extends('layout')

@section('content')
    <h1 class="header-blog">{{ $article -> title }}</h1>
    <div class="studiekeuze">
        <h2>{{ $article -> title }}</h2>
        <p>{{ $article -> body }}</p>
        <a href="{{ route('articles.edit', $article) }}">Edit</a>
        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
