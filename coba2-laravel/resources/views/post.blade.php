{{-- @extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $post['id'] }}"> {{ $post['title'] }}</a>
            </h2>
            <h5>By: {{ $post['author'] }} </h5>
            <p> {{ $post['body'] }}</p>

        </article>
    @endforeach

@endsection --}}


@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($post as $p)
        <article>
            <h2><a href="/blog/{{ $p->slug }}">{{ $p->title }}</a></h2>
            <h5>{{ $p->author }}</h5>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach


@endsection
