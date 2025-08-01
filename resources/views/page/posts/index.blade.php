@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <p>Published at: {{ $post->published_at ? $post->published_at->format('d M Y') : 'N/A' }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
