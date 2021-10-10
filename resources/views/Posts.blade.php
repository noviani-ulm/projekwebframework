@extends('layouts.main')

@section('container')
    @foreach ( $posts as $post)
    <article class = "mb-5">
    <h2>
        <a href="/Post/{{  $post["slug"] }}">{{ $post["title"] }}</h2>
    <h5>By: {{ $post["post"] }}</h5>
    <p>{{ $post["body"] }}</p>
    </article>

    @endforeach
@endsection
