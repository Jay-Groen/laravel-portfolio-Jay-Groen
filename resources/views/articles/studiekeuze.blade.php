@extends('layout')

@section('content')
    <h1 class="header-blog">Blog Studiekeuze</h1>
    <div class="studiekeuze">
        <h2>{{ $article -> title }}</h2>
        <p>{{ $article -> body }}</p>
    </div>
@endsection
