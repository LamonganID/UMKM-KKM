@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Category: {{ $post->category ? $post->category->name : 'Uncategorized' }}</p>
    <p>Published at: {{ $post->published_at ? $post->published_at->format('d M Y') : 'N/A' }}</p>
    @if($post->thumbnail)
        <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" style="max-width: 300px;">
    @endif
    <div>
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection
