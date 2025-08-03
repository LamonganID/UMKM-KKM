@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <!-- Carousel Section -->
    @include('components.carousel')
    
    <!-- Profile Section -->
    <div id="profile" class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Profil Desa Bandar Kedungmulyo</h1>
                <p class="py-6">Bandar Kedungmulyo adalah sebuah desa yang terletak di Kecamatan Kedungmulyo, Kabupaten Jombang, Provinsi Jawa Timur, Indonesia. Desa ini memiliki potensi yang besar dalam bidang pertanian dan pariwisata.</p>
                <p class="py-6">Dengan luas wilayah sekitar 200 hektar, desa ini dihuni oleh sekitar 5.000 jiwa yang mayoritas bermata pencaharian sebagai petani. Desa ini juga memiliki beberapa objek wisata alam yang menarik untuk dikunjungi.</p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
                    <div class="stat">
                        <div class="stat-title">Luas Wilayah</div>
                        <div class="stat-value">200 ha</div>
                        <div class="stat-desc">hektar</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Jumlah Penduduk</div>
                        <div class="stat-value">5.000</div>
                        <div class="stat-desc">jiwa</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">Jumlah RT/RW</div>
                        <div class="stat-value">15/5</div>
                        <div class="stat-desc">RT/RW</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vision and Mission Section -->
    <div id="visiMisi" class="hero min-h-screen">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Visi dan Misi</h1>
                <div class="divider"></div>
                <div class="py-6">
                    <h2 class="text-2xl font-bold">Visi</h2>
                    <p class="py-4">Terwujudnya Desa Bandar Kedungmulyo yang Mandiri, Religius, dan Berbudaya</p>
                    
                    <h2 class="text-2xl font-bold">Misi</h2>
                    <ul class="py-4 text-left">
                        <li class="py-2">1. Meningkatkan kualitas sumber daya manusia yang unggul dan berdaya saing</li>
                        <li class="py-2">2. Membangun infrastruktur desa yang berkualitas dan berkelanjutan</li>
                        <li class="py-2">3. Mengembangkan potensi ekonomi kerakyatan berbasis pertanian dan pariwisata</li>
                        <li class="py-2">4. Meningkatkan kualitas pelayanan publik yang prima</li>
                        <li class="py-2">5. Mewujudkan tata kelola pemerintahan desa yang bersih dan transparan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Latest Posts Section -->
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content w-full">
            <div class="w-full">
                <h1 class="text-5xl font-bold text-center mb-8">Berita Terkini</h1>
                
                @if(isset($latestPosts) && $latestPosts->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($latestPosts as $post)
                            <div class="card bg-base-100 shadow-xl">
                                <figure><img src="{{ $post->thumbnail_url ?? 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}" alt="{{ $post->title }}" class="w-full h-48 object-cover" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title">{{ $post->title }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                    <div class="card-actions justify-end">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
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
        </div>
    </div>
@endsection
