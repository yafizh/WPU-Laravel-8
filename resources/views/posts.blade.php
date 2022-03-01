@extends('layouts/main')

@section('container')
    <h1>Halaman Posts</h1>
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h2>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
