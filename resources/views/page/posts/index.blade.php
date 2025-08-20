@extends('layouts.app')

@section('title', 'Berita')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    <!-- Carousel Section -->
<div class="px-5">
    <section class="mb-8 pt-8">
        <div class="carousel carousel-center bg-neutral rounded-box space-x-4 p-4 snap-x snap-mandatory overflow-x-auto">
            @foreach($carouselPosts as $index => $post)
                <div class="carousel-item relative w-full md:w-1/2 lg:w-1/3 snap-start">
                    <a href="{{ route('posts.show', $post->id) }}" class="block">
                        <div class="card card-compact bg-base-100 shadow-lg hover:shadow-xl transition">
                            <figure>
                                @if($post->thumbnail_url)
                                    <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-56 object-cover rounded-t-lg" />
                                @else
                                    <div class="w-full h-56 bg-gray-300 flex items-center justify-center rounded-t-lg">
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

    <!-- Categories Navbar -->
    <section class="mb-8">
        <div class="flex gap-4 overflow-x-auto pb-2 scrollbar-hide max-w-full">
            <a href="{{ route('posts.index') }}" class="px-4 py-2 rounded-lg bg-primary text-white whitespace-nowrap">
                All Categories
            </a>
            @foreach($categories as $category)
                <a href="{{ route('posts.index') }}?category={{ $category->slug }}"
                   class="px-4 py-2 rounded-lg bg-base-200 whitespace-nowrap hover:bg-base-300">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </section>

    <!-- Posts Grid -->
    <section class="mb-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
                <div class="card bg-base-100 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <figure>
                        @if($post->thumbnail_url)
                            <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-t-lg" />
                        @else
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center rounded-t-lg">
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
            @empty
                <p class="col-span-3 text-center text-gray-500">No posts found.</p>
            @endforelse
        </div>
    </section>

    <!-- Pagination -->
    <section >
        <div class="my-6">
            {{ $posts->links() }}
        </div>
    </section>
</div>

<style>
/* Sembunyikan scrollbar */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endsection
