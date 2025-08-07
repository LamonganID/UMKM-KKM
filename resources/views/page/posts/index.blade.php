@extends('layouts.app')

@section('title', 'Berita')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <!-- Carousel Section -->
    <section class="mb-8">
        <div class="carousel carousel-center bg-neutral rounded-box space-x-4 p-4 snap-x snap-mandatory overflow-x-auto">
            @foreach($carouselPosts as $index => $post)
                <div class="carousel-item relative w-full md:w-1/2 lg:w-1/3 snap-start">
                    <a href="{{ route('posts.show', $post->id) }}" class="block">
                        <div class="card card-compact bg-base-100 shadow-xl">
                            <figure>
                                @if($post->thumbnail_url)
                                    <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-64 object-cover" />
                                @else
                                    <div class="w-full h-64 bg-gray-300 flex items-center justify-center">
                                        <span class="text-gray-500">No Image</span>
                                    </div>
                                @endif
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title text-sm">{{ Str::limit($post->title, 50) }}</h2>
                                <p class="text-xs text-gray-600">{{ $post->category->name ?? 'Uncategorized' }}</p>
                                <p class="text-xs text-gray-500">{{ $post->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Navbar with Categories -->
    <section class="mb-8">
        <div class="navbar bg-base-100 shadow-sm rounded-lg">
            <div class="navbar-start flex items-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="{{ route('posts.index') }}" class="font-semibold">All Categories</a></li>
                        @foreach($categories as $category)
                            <li><a href="{{ route('posts.index') }}?category={{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ route('posts.index') }}" class="font-semibold">All Categories</a></li>
                    @foreach($categories as $category)
                        <li><a href="{{ route('posts.index') }}?category={{ $category->slug }}">{{ $category->name }} </a></li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </section>

    <!-- Posts Grid -->
    <section class="mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <figure>
                        @if($post->thumbnail_url)
                            <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover" />
                        @else
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                    </figure>
                    <div class="card-body">
                        <div class="flex items-center justify-between mb-2">
                            <span class="badge badge-primary badge-sm">{{ $post->category->name ?? 'Uncategorized' }}</span>
                            <span class="text-xs text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="card-title text-lg">{{ Str::limit($post->title, 60) }}</h2>
                        <p class="text-gray-600 text-sm">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Pagination -->
    <section>
        <div class="flex justify-center">
            {{ $posts->links() }}
        </div>
    </section>
@endsection
