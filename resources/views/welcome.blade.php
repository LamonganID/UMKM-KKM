@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Hero / Carousel -->
    @include('components.carousel', ['albums' => $albums])

    <!-- Profile Section -->
    <section id="profile" class="py-20 bg-base-200">
        <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            
            <!-- Text -->
            <div data-aos="fade-right">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6">Profil Desa Lorem Ipsum</h1>
                <p class="mb-4 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laboriosam, facere fugiat optio animi minus ipsam ducimus magnam et ipsa?</p>
                <p class="mb-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam omnis harum quae velit iste quos iure hic voluptatum quod sapiente?</p>
                <a href="#visiMisi" class="btn btn-primary">Lihat Visi & Misi</a>
            </div>

            <!-- Stats -->
            <div class="grid gap-6">
                <div class="stats shadow bg-base-100">
                    <div class="stat">
                        <div class="stat-title">Jumlah Penduduk</div>
                        <div class="stat-value">12K+</div>
                        <div class="stat-desc">Tahun 2025</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Luas Wilayah</div>
                        <div class="stat-value">1.250 Ha</div>
                        <div class="stat-desc">Data BPS</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Dusun</div>
                        <div class="stat-value">7</div>
                        <div class="stat-desc">Wilayah Administratif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section id="visiMisi" class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Visi & Misi</h2>
            <div class="divider"></div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10">
                <div data-aos="fade-up">
                    <h3 class="text-2xl font-semibold mb-3">Visi</h3>
                    <p class="leading-relaxed">Terwujudnya Desa Lorem ipsum dolor sit, Religius, dan Berbudaya</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-semibold mb-3">Misi</h3>
                    <ul class="list-disc text-left pl-5 space-y-2">
                        <li>Meningkatkan pembangunan infrastruktur.</li>
                        <li>Memberdayakan ekonomi kerakyatan.</li>
                        <li>Meningkatkan mutu pendidikan & kesehatan.</li>
                        <li>Melestarikan budaya & tradisi desa.</li>
                        <li>Menjaga lingkungan yang berkelanjutan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terkini -->
    <section id="news" class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-10">Berita Terkini</h2>

            @if(isset($latestPosts) && $latestPosts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($latestPosts as $post)
                        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition duration-300" data-aos="fade-up">
                            <figure>
                                <img src="{{ $post->thumbnail_url ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" 
                                     alt="{{ $post->title }}" 
                                     class="w-full h-48 object-cover" />
                            </figure>
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                <div class="card-actions justify-end">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-xl">Belum ada berita yang tersedia.</p>
                </div>
            @endif
        </div>
    </section>

@endsection
