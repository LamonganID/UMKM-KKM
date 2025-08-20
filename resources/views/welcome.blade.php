@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <!-- Carousel Section -->
    @include('components.carousel', ['albums' => $albums])
    
    <!-- Profile Section -->
    <div id="profile" class="hero min-h-screen py-1 bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <div class="text-center lg:text-left" data-aos="fade-right">
                <h1 class="text-5xl font-bold" data-aos="fade-up" data-aos-delay="200">Profil Lorem Ipsum Dolor Sit.</h1>
                <p class="py-6" data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia laboriosam, facere fugiat optio animi minus ipsam ducimus magnam et ipsa? Debitis ullam molestiae minus quia expedita commodi fuga obcaecati, nostrum aspernatur laborum tenetur officia modi tempora molestias, veritatis, incidunt placeat esse facere! Harum corrupti autem sint cum officia a earum.</p>
                <p class="py-6" data-aos="fade-up" data-aos-delay="600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam omnis harum quae velit iste quos iure hic voluptatum quod sapiente?</p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100" data-aos="fade-left" data-aos-delay="300">
                <div class="card-body">
                    <div class="stat" data-aos="zoom-in" data-aos-delay="400">
                        <div class="stat-title">Lorem, ipsum.</div>
                        <div class="stat-value">Lorem, ipsum</div>
                        <div class="stat-desc">Lorem, ipsum.</div>
                    </div>
                    <div class="stat" data-aos="zoom-in" data-aos-delay="500">
                        <div class="stat-title">Lorem, ipsum.</div>
                        <div class="stat-value">Lorem, ipsum.</div>
                        <div class="stat-desc">Lorem, ipsum.</div>
                    </div>
                    <div class="stat" data-aos="zoom-in" data-aos-delay="600">
                        <div class="stat-title">Lorem, ipsum.</div>
                        <div class="stat-value">Lorem, ipsum.</div>
                        <div class="stat-desc">Lorem, ipsum.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vision and Mission Section -->
    <div id="visiMisi" class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md" data-aos="zoom-in">
                <h1 class="text-5xl font-bold" data-aos="fade-up" data-aos-delay="200">Visi dan Misi</h1>
                <div class="divider" data-aos="fade-up" data-aos-delay="300"></div>
                <div class="py-6">
                    <h2 class="text-2xl font-bold" data-aos="fade-up" data-aos-delay="400">Visi</h2>
                    <p class="py-4" data-aos="fade-up" data-aos-delay="500">Terwujudnya Desa Lorem ipsum dolor sit, Religius, dan Berbudaya</p>
                    
                    <h2 class="text-2xl font-bold" data-aos="fade-up" data-aos-delay="600">Misi</h2>
                    <ul class="py-4 text-left">
                        <li class="py-2" data-aos="fade-right" data-aos-delay="700">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat molestiae hic rerum reprehenderit doloribus vitae?</li>
                        <li class="py-2" data-aos="fade-right" data-aos-delay="800">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro fugiat placeat nostrum, vero repellendus?</li>
                        <li class="py-2" data-aos="fade-right" data-aos-delay="900">3. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum reiciendis illo voluptatem odit debitis.</li>
                        <li class="py-2" data-aos="fade-right" data-aos-delay="1000">4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</li>
                        <li class="py-2" data-aos="fade-right" data-aos-delay="1100">5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Posts Section -->
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content w-full">
            <div class="w-full">
                <h1 class="text-5xl font-bold text-center mb-8" data-aos="fade-down">Berita Terkini</h1>
                
                @if(isset($latestPosts) && $latestPosts->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($latestPosts as $index => $post)
                            <div class="card bg-base-100 shadow-xl" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 200 }}">
                                <figure data-aos="zoom-in" data-aos-delay="{{ ($index + 1) * 300 }}">
                                    <img src="{{ $post->thumbnail_url ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" alt="{{ $post->title }}" class="w-full h-48 object-cover" />
                                </figure>
                                <div class="card-body" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 400 }}">
                                    <h2 class="card-title" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 500 }}">{{ $post->title }}</h2>
                                    <p data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 600 }}">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                    <div class="card-actions justify-end" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 700 }}">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8" data-aos="fade-up">
                        <p class="text-xl">Belum ada berita yang tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
