@extends('layouts.app')
@section('title', 'Albums')
@section('content')
<div class="min-h-screen bg-base-200">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-base-content mb-2">Galeri Foto</h1>
            <p class="text-base-content/70">Kumpulan dokumentasi kegiatan dan momen penting</p>
        </div>

        <!-- Photos Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($photos as $photo)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <figure class="cursor-pointer" onclick="openPhotoModal('{{ $photo->photo_url }}', '{{ addslashes($photo->caption) }}')">
                        <img 
                            src="{{ $photo->photo_url }}" 
                            alt="{{ $photo->caption }}" 
                            class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300"
                        />
                    </figure>
                    <div class="card-body p-4">
                        <h3 class="card-title text-sm">{{ Str::limit($photo->caption, 50) }}</h3>
                        <p class="text-xs text-base-content/70">
                            {{ $photo->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 mx-auto text-base-content/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-base-content/70">Belum ada foto yang tersedia</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Enhanced Modal -->
<dialog id="photo_modal" class="modal">
    <div class="modal-box max-w-4xl">
        <img id="modalImage" src="" alt="" class="w-full rounded-lg mb-4">
        <div class="text-center">
            <h3 id="modalTitle" class="text-lg font-bold text-base-content mb-2"></h3>
            <p id="modalCaption" class="text-base-content/80"></p>
        </div>
        <div class="modal-action">
            <form method="dialog">
                <button class="btn btn-sm">Tutup</button>
            </form>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<!-- Script untuk modal -->
<script>
function openPhotoModal(imageUrl, caption) {
    document.getElementById('modalImage').src = imageUrl;
    document.getElementById('modalTitle').innerText = caption;
    document.getElementById('modalCaption').innerText = caption;
    document.getElementById('photo_modal').showModal();
}

// Close modal on backdrop click
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('photo_modal');
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.close();
        }
    });
});
</script>
@endsection
