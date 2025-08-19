@extends('layouts.app')
@section('title', 'Team Kami - Anggota & Profil')
@section('content')

<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            Team Kami
        </h1>
        <p class="text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed">
            Perkenalkan team keren yang selalu siap memberikan pelayanan terbaik 
            dengan semangat dan dedikasi tinggi
        </p>
    </div>
</section>

<!-- Team Showcase Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Tabs -->
        <div class="flex justify-center mb-12">
            <div class="bg-white rounded-full p-1 shadow-lg">
                <button class="px-6 py-3 rounded-full bg-indigo-600 text-white font-medium transition-all duration-300">
                    Semua Anggota
                </button>
                <button class="px-6 py-3 rounded-full text-gray-600 hover:text-indigo-600 transition-all duration-300">
                    Management
                </button>
                <button class="px-6 py-3 rounded-full text-gray-600 hover:text-indigo-600 transition-all duration-300">
                    Staff
                </button>
            </div>
        </div>

        <!-- Team Grid with Animation -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($contacts as $index => $contact)
                <!-- Premium Member Card -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    
                    <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:scale-105">
                        
                        <!-- Image Container with Hover Effect -->
                        <div class="relative h-80 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent z-10"></div>
                            
                            @if($contact->image)
                                <img src="{{ $contact->image }}" 
                                     alt="{{ $contact->name }}"
                                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <div class="w-24 h-24 rounded-full bg-white/20 flex items-center justify-center mb-4">
                                            <span class="text-3xl font-bold">{{ substr($contact->name, 0, 1) }}</span>
                                        </div>
                                        <span class="text-sm opacity-75">Photo Coming Soon</span>
                                    </div>
                                </div>
                            @endif
                            
                            <!-- Position Badge with Animation -->
                            <div class="absolute top-4 left-4 z-20">
                                <span class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg transform transition-all duration-300 group-hover:scale-110">
                                    {{ $contact->jabatan }}
                                </span>
                            </div>

                            <!-- Social Links Overlay -->
                            <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-3">
                                <button class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </button>
                                <button class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                                <button class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section with Glass Effect -->
                    <div class="relative p-6">
                        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $contact->name }}</h3>
                        <p class="text-sm text-indigo-600 font-medium mb-4">{{ $contact->jabatan }}</p>
                        
                        <!-- Contact Details with Icons -->
                        <div class="space-y-3">
                            <div class="flex items-center group">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-indigo-200 transition-colors">
                                    <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">{{ $contact->email }}</span>
                            </div>
                            
                            <div class="flex items-center group">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-purple-200 transition-colors">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">{{ $contact->phone }}</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-6 flex space-x-2">
                            <button class="flex-1 bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-2 px-4 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                                <span class="flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    Chat
                                </span>
                            </button>
                            
                            <button class="w-10 h-10 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State with Animation -->
                <div class="col-span-full text-center py-20">
                    <div class="relative inline-block">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                        <svg class="relative w-24 h-24 mx-auto text-gray-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Team Belum Tersedia</h3>
                    <p class="text-gray-600 max-w-md mx-auto">Data anggota tim sedang dalam proses update. Kembali lagi nanti!</p>
                    <button class="mt-6 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-300">
                        Refresh Halaman
                    </button>
                </div>
            @endforelse
        </div>

        <!-- Stats Counter -->
        @if($contacts->count() > 0)
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-center text-white">
                    <div class="text-4xl font-bold mb-2">{{ $contacts->count() }}</div>
                    <div class="text-indigo-100">Total Anggota</div>
                </div>
                <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-8 text-center text-white">
                    <div class="text-4xl font-bold mb-2">100%</div>
                    <div class="text-pink-100">Dedicated</div>
                </div>
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-8 text-center text-white">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-green-100">Support</div>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Custom CSS Animations -->
<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes tilt {
    0%, 100% { transform: rotate(-0.5deg); }
    50% { transform: rotate(0.5deg); }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-tilt {
    animation: tilt 3s ease-in-out infinite;
}

.team-card {
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.glow-effect {
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
}
</style>

