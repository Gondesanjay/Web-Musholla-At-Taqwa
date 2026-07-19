<div class="min-h-screen bg-[#fcfdfb] pb-20">

    <!-- Navbar Solid (Sama seperti halaman berita) -->
    <nav class="bg-[#0b3d2e] text-white py-4 px-6 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/images/logo.jpg') }}" class="h-10 w-10 object-contain rounded-full border border-white/20">
                <span class="text-xl font-bold tracking-wide">Musholla At-Taqwa</span>
            </div>
            <a href="/" class="text-sm font-medium hover:text-yellow-400 transition flex items-center">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </nav>

    <!-- Header Halaman -->
    <div class="bg-gradient-to-b from-[#0b3d2e]/10 to-transparent pt-12 pb-8 px-4 text-center">
        <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Dokumentasi</p>
        <h1 class="text-4xl font-bold text-[#0b3d2e]">Semua Galeri Kegiatan</h1>
    </div>

    <!-- Grid Galeri -->
    <div class="max-w-6xl mx-auto px-4 mt-8">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($semuaGaleri as $galeri)
            <div class="h-48 md:h-64 bg-black rounded-2xl overflow-hidden relative group shadow-md border border-gray-200 hover:-translate-y-2 transition duration-300 cursor-pointer">
                <img src="{{ asset('storage/' . $galeri->foto) }}" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100" alt="{{ $galeri->judul }}">
                <!-- Teks judul foto tetap putih karena latar foto kita beri gradasi hitam -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent flex items-end p-4">
                    <p class="text-white text-sm md:text-base font-bold w-full leading-tight drop-shadow-md">{{ $galeri->judul }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tombol Pagination -->
        <div class="mt-12">
            {{ $semuaGaleri->links() }}
        </div>
    </div>
</div>