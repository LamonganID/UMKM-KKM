@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Posts</h1>

    {{-- Carousel berita --}}
    @if(isset($carouselPosts) && $carouselPosts->isNotEmpty())
        <div class="carousel w-full mb-8 rounded-lg shadow-lg">
            @foreach($carouselPosts as $post)
                <div id="slide{{ $loop->index }}" class="carousel-item relative w-full">
                    @if($post->thumbnail_url)
                        <img src="{{ $post->thumbnail_url }}" class="w-full h-64 object-cover rounded-lg" alt="{{ $post->title }}" />
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4 rounded-b-lg text-white">
                        <h3 class="text-lg font-semibold">
                            <a href="{{ route('posts.show', $post->id) }}" class="hover:underline">{{ $post->title }}</a>
                        </h3>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide{{ $loop->index == 0 ? $carouselPosts->count() - 1 : $loop->index - 1 }}" class="btn btn-circle bg-primary text-white hover:bg-primary-focus">❮</a>
                        <a href="#slide{{ $loop->index == $carouselPosts->count() - 1 ? 0 : $loop->index + 1 }}" class="btn btn-circle bg-primary text-white hover:bg-primary-focus">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Navigasi category di bawah carousel --}}
    @if(isset($categories) && $categories->isNotEmpty())
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            @foreach($categories as $category)
                <a href="{{ route('posts.category', $category->id) }}" class="badge badge-outline hover:badge-primary cursor-pointer">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    @endif

    {{-- Kartu berita --}}
    @if($posts->isEmpty())
        <p class="text-center text-gray-500">No posts available.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-6">
            @foreach($posts as $post)
                <div class="card bg-base-100 shadow-xl rounded-lg hover:shadow-2xl transition-shadow duration-300">
                    @if($post->thumbnail_url)
                        <figure><img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-t-lg"></figure>
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="{{ route('posts.show', $post->id) }}" class="hover:text-primary hover:underline transition-colors duration-200">{{ $post->title }}</a>
                        </h2>
                        <p class="text-sm text-gray-600">
                            {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}
                        </p>
                        <p class="text-xs text-gray-400 mt-2">
                            Published at: {{ $post->published_at ? $post->published_at->format('d M Y') : 'N/A' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
