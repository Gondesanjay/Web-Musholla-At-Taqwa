<div class="min-h-screen bg-[#fcfdfb] pb-20">
    <!-- Navbar Simpel -->
    <nav class="bg-[#0b3d2e] text-white py-4 px-6 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/images/logo.jpg') }}" class="h-10 w-10 object-contain rounded-full border border-white/20">
                <span class="text-xl font-semibold tracking-wide">Musholla At-Taqwa</span>
            </div>
            <a href="/" class="text-sm font-medium hover:text-yellow-400 transition flex items-center">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </nav>

    <!-- Header Halaman -->
    <div class="bg-gradient-to-b from-[#0b3d2e]/10 to-transparent pt-12 pb-8 px-4 text-center">
        <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Arsip Informasi</p>
        <h1 class="text-4xl font-serif text-[#0b3d2e]">Semua Kabar & Berita</h1>
    </div>

    <!-- Grid Berita -->
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($semuaBerita as $berita)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition duration-500 flex flex-col hover:-translate-y-2">
                <div class="h-56 bg-gray-200 relative overflow-hidden shrink-0">
                    @if($berita->thumbnail)
                    <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="object-cover w-full h-full" alt="{{ $berita->judul }}">
                    @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">Tanpa Gambar</div>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-grow relative">
                    <p class="text-xs text-[#f59e0b] font-bold uppercase mb-2">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y') }}</p>
                    <h3 class="font-bold text-xl text-gray-900 leading-snug mb-3 line-clamp-2">{{ $berita->judul }}</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-6 leading-relaxed">{!! Str::limit(strip_tags($berita->konten), 120) !!}</p>
                    <div class="mt-auto border-t border-gray-100 pt-4 flex items-center justify-between">
                        <button wire:click="lihatBerita({{ $berita->id }})" class="text-[#0b3d2e] text-sm font-semibold hover:text-[#f59e0b] transition flex items-center">
                            Baca selengkapnya <svg class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Tombol Pagination -->
        <div class="mt-12">
            {{ $semuaBerita->links() }}
        </div>
    </div>

    <!-- Modal Berita (Sama seperti Beranda) -->
    @if($detailBerita)
    <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" wire:click="tutupModal"></div>
        <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto transform transition-all">
            <button wire:click="tutupModal" class="absolute top-4 right-4 bg-white/50 backdrop-blur-md hover:bg-red-500 text-gray-800 hover:text-white w-10 h-10 rounded-full z-20">✖</button>
            @if($detailBerita->thumbnail)
            <div class="w-full h-64 md:h-80 relative">
                <img src="{{ asset('storage/' . $detailBerita->thumbnail) }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            @endif
            <div class="p-6 md:p-10">
                <p class="text-[#f59e0b] font-bold text-sm tracking-wider mb-3">{{ \Carbon\Carbon::parse($detailBerita->tanggal_publikasi)->translatedFormat('l, d F Y') }}</p>
                <h2 class="text-2xl md:text-4xl font-serif text-[#0b3d2e] mb-8 leading-tight">{{ $detailBerita->judul }}</h2>
                <div class="prose prose-lg prose-green text-gray-600 max-w-none leading-relaxed">{!! $detailBerita->konten !!}</div>
            </div>
        </div>
    </div>
    @endif
</div>