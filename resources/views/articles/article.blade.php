@extends('layout')

@section('content')
    <h1 class="header-blog">HEADER</h1>
    <div class="studiekeuze">
        <h2>{{ $article -> title }}</h2>
        <p>{{ $article -> body }}</p>
    </div>
    <br>
    <a href="{{ route('articles.edit', $article) }}">Edit</a>
    <br>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
