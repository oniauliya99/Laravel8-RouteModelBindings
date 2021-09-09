{{-- @extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/blog">Back to Blog</a>
@endsection --}}

@extends('layouts.main')


@section('container')
    <h1>{{ $title }}</h1>
    <article>
        <h2 class="mt-3">{{ $blog->title }}</h2>
        <p>{{ $blog->body }}</p>
    </article>
    <a href="/blog">Back to Page</a>
@endsection
