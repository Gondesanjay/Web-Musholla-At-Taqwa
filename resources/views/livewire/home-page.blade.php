<div class="bg-[#fcfdfb] min-h-screen">

    <!-- NAVBAR -->
    <div x-data="{ mobileMenuOpen: false, darkMode: false }"
        x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{ 'dark': darkMode }">

        <nav class="bg-[#0b3d2e] text-white py-4 px-6 shadow-md relative z-50">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo Musholla" class="h-10 w-10 object-contain rounded-full shadow-sm border border-white/20">
                    <span class="text-xl font-bold tracking-wide">Musholla At-Taqwa</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-200 items-center">
                    <a href="#jadwal" class="hover:text-yellow-400 transition">Jadwal Sholat</a>
                    <a href="#kajian" class="hover:text-yellow-400 transition">Kajian</a>
                    <a href="#agenda" class="hover:text-yellow-400 transition">Agenda</a>
                    <a href="#galeri" class="hover:text-yellow-400 transition">Galeri</a>
                    <a href="#pengurus" class="hover:text-yellow-400 transition">Pengurus</a>
                    <a href="#donasi" class="hover:text-yellow-400 transition">Donasi</a>
                    <a href="#laporan" class="hover:text-yellow-400 transition">Laporan</a>

                    <!-- Dark Mode Toggle Desktop -->
                    <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-white/10 transition" aria-label="Toggle Dark Mode">
                        <svg x-show="!darkMode" class="w-5 h-5 text-gray-200 hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg x-show="darkMode" x-cloak class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 2.365a1 1 0 011.415 0l.707.707a1 1 0 01-1.414 1.415l-.707-.707a1 1 0 010-1.415zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zm-2.365 4.22a1 1 0 010 1.415l-.707.707a1 1 0 01-1.414-1.415l.707-.707a1 1 0 011.415 0zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-4.22-2.365a1 1 0 010-1.415l-.707-.707a1 1 0 01-1.414 1.415l.707.707a1 1 0 011.415 0zM4 10a1 1 0 01-1 1H2a1 1 0 110-2h1a1 1 0 011 1zm2.365-4.22a1 1 0 010-1.415l-.707-.707a1 1 0 01-1.414 1.415l.707.707a1 1 0 011.415 0zM10 5a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <a href="/admin" class="border border-yellow-400 text-yellow-400 font-medium px-5 py-1.5 rounded-full text-sm hover:bg-yellow-400 hover:text-[#0b3d2e] transition shadow-sm">Admin</a>
                </div>

                <!-- Hamburger Button (Mobile) -->
                <div class="md:hidden flex items-center space-x-4">
                    <!-- Dark Mode Toggle Mobile -->
                    <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-white/10 transition text-gray-200">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg x-show="darkMode" x-cloak class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 2.365a1 1 0 011.415 0l.707.707a1 1 0 01-1.414 1.415l-.707-.707a1 1 0 010-1.415zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zm-2.365 4.22a1 1 0 010 1.415l-.707.707a1 1 0 01-1.414-1.415l.707-.707a1 1 0 011.415 0zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-4.22-2.365a1 1 0 010-1.415l-.707-.707a1 1 0 01-1.414 1.415l.707.707a1 1 0 011.415 0zM4 10a1 1 0 01-1 1H2a1 1 0 110-2h1a1 1 0 011 1zm2.365-4.22a1 1 0 010-1.415l-.707-.707a1 1 0 01-1.414 1.415l.707.707a1 1 0 011.415 0zM10 5a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <button @click="mobileMenuOpen = true" class="text-gray-200 hover:text-white focus:outline-none">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Latar Belakang Transparan (Backdrop) -->
        <div x-show="mobileMenuOpen"
            @click="mobileMenuOpen = false"
            class="fixed inset-0 bg-black/60 z-[60] backdrop-blur-sm md:hidden"
            x-transition:enter="transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-cloak>
        </div>

        <!-- Panel Menu Slide-over -->
        <div x-show="mobileMenuOpen"
            class="fixed inset-y-0 right-0 z-[70] w-64 bg-[#0b3d2e] shadow-2xl md:hidden flex flex-col"
            x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            x-cloak>

            <!-- Header Menu Mobile -->
            <div class="p-6 flex justify-between items-center border-b border-white/10">
                <span class="font-bold text-white text-lg tracking-wide">Menu Navigasi</span>
                <button @click="mobileMenuOpen = false" class="text-gray-300 hover:text-white bg-white/10 p-2 rounded-full transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Tautan Menu -->
            <div class="flex-1 overflow-y-auto py-4 px-6 space-y-5 flex flex-col text-gray-200 font-medium">
                <a href="#jadwal" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Jadwal Sholat</a>
                <a href="#kajian" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Kajian</a>
                <a href="#agenda" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Agenda</a>
                <a href="#galeri" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Galeri</a>
                <a href="#pengurus" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Pengurus</a>
                <a href="#donasi" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Donasi</a>
                <a href="#laporan" @click="mobileMenuOpen = false" class="hover:text-yellow-400 hover:translate-x-1 transition transform block">Laporan</a>

                <!-- Tombol Admin -->
                <div class="pt-4 border-t border-white/10 mt-2">
                    <a href="/admin" class="block text-center border border-yellow-400 text-yellow-400 font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-yellow-400 hover:text-[#0b3d2e] transition shadow-md w-full">Portal Admin</a>
                </div>
            </div>
        </div>
    </div>

    <!-- HERO SECTION -->
    <header x-data="{
            activeSlide: 1,
            slides: [
                '{{ asset("storage/images/musholla.jpg") }}',
                '{{ asset("storage/images/musholla-dalam.jpg") }}',
                '{{ asset("storage/images/musholla-jamaah.jpg") }}'
            ],
            next() { this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1 },
            prev() { this.activeSlide = this.activeSlide === 1 ? this.slides.length : this.activeSlide - 1 },
            autoPlay() { setInterval(() => { this.next() }, 6000) }
        }"
        x-init="autoPlay()"
        class="relative w-full h-[85vh] min-h-[600px] flex items-center justify-center overflow-hidden">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index + 1" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform scale-105" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-1000 absolute inset-0" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 w-full h-full bg-[#0b3d2e]">
                <img :src="slide" alt="Background Musholla" class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
        </template>

        <!-- DIPERBAIKI: Jarak dan Ukuran Font di HP disesuaikan -->
        <div class="relative z-10 text-center px-4 md:px-8 max-w-4xl mx-auto -mt-10">
            <h3 class="text-yellow-400 font-bold tracking-widest mb-4 text-xl md:text-2xl drop-shadow-md">السَّلَامُ عَلَيْكُمْ</h3>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white drop-shadow-lg">Musholla At-Taqwa</h1>
            <p class="text-sm md:text-lg lg:text-xl text-gray-100 font-medium mb-10 leading-relaxed drop-shadow-md">
                Pusat ibadah, pendidikan, dan kegiatan sosial umat Islam. Bersama memakmurkan rumah Allah dan bermanfaat bagi lingkungan sekitar.
            </p>
            <div class="flex justify-center flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#donasi" class="bg-[#f59e0b] text-[#0b3d2e] px-8 py-3 rounded-full font-bold hover:bg-yellow-400 transition shadow-lg hover:shadow-xl hover:-translate-y-1">Donasi Sekarang</a>
                <a href="#jadwal" class="bg-white/20 backdrop-blur-md border border-white/50 text-white px-8 py-3 rounded-full font-semibold hover:bg-white/30 transition shadow-lg hover:-translate-y-1">Jadwal Sholat</a>
            </div>
        </div>

        <button @click="prev()" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/80 text-white p-3 rounded-full backdrop-blur-sm transition z-20"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg></button>
        <button @click="next()" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/80 text-white p-3 rounded-full backdrop-blur-sm transition z-20"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg></button>
    </header>

    <div class="relative z-20 -mt-32 max-w-6xl mx-auto px-4 mb-16">

        <!-- PENGUMUMAN / KAJIAN MELAYANG -->
        @if($pengumuman)
        <div class="relative bg-white p-6 md:p-8 rounded-3xl shadow-[0_15px_40px_-10px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col md:flex-row items-start md:items-center gap-6 mb-12 w-full max-w-5xl mx-auto transition-all duration-300 hover:shadow-[0_20px_50px_-10px_rgba(0,0,0,0.15)] hover:-translate-y-1 overflow-hidden group">

            <!-- Aksen Garis Vertikal Kuning -->
            <div class="absolute left-0 top-0 bottom-0 w-2 bg-[#f59e0b] group-hover:w-3 transition-all duration-300"></div>

            <!-- Ikon Kotak (DIPERBAIKI: group-hover:text-white dipindahkan langsung ke dalam tag svg) -->
            <div class="bg-[#0b3d2e]/5 p-5 rounded-2xl shrink-0 border border-[#0b3d2e]/10 group-hover:scale-110 group-hover:bg-[#0b3d2e] transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-[#0b3d2e] group-hover:text-white transition-colors duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.982 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                </svg>
            </div>

            <!-- Konten Teks -->
            <div class="flex-1 min-w-0 w-full">
                <!-- Wrapper Kategori & Tanggal -->
                <div class="flex flex-wrap items-center justify-between mb-3 gap-3">
                    <span class="text-xs font-bold text-[#f59e0b] tracking-widest uppercase bg-yellow-50 px-3 py-1.5 rounded-lg border border-yellow-200/60 shadow-sm">
                        ✨ {{ $pengumuman->kategori }}
                    </span>
                    <span class="text-xs font-bold text-gray-500 flex items-center bg-gray-50 px-3 py-1.5 rounded-lg border border-gray-200">
                        <svg class="h-4 w-4 mr-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ \Carbon\Carbon::parse($pengumuman->tanggal_pelaksanaan)->translatedFormat('l, d F Y') }}
                    </span>
                </div>

                <h4 class="font-bold text-xl md:text-2xl text-[#0b3d2e] leading-snug mb-2 group-hover:text-[#f59e0b] transition-colors duration-300">
                    {{ $pengumuman->judul }}
                </h4>

                <p class="text-[15px] text-gray-600 font-medium leading-relaxed line-clamp-2 md:line-clamp-3">
                    {{ $pengumuman->deskripsi }}
                </p>
            </div>
        </div>
        @endif
        <!-- JADWAL SHOLAT -->
        <section id="jadwal" class="bg-white rounded-3xl shadow-2xl border border-gray-200 p-6 md:p-8 flex flex-col items-center">
            <div class="flex flex-col md:flex-row justify-between items-center w-full mb-8 border-b border-gray-200 pb-5">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="bg-green-50 p-3 rounded-xl mr-4 text-[#0b3d2e]"><svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></div>
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl font-bold text-[#0b3d2e]">Jadwal Sholat</h2>
                        <p class="text-sm font-medium text-gray-600 mt-1">Area Sekitar • {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
                    </div>
                </div>
                <div class="text-[#f59e0b] font-bold text-xs uppercase tracking-widest bg-yellow-50 px-5 py-2.5 rounded-full">Waktu Ibadah</div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-3 w-full">
                <!-- Waktu Sholat -->
                <div class="bg-[#fcfdfb] hover:bg-[#0b3d2e] group rounded-2xl p-5 text-center transition-all duration-300 border border-gray-200 shadow-sm cursor-default">
                    <p class="text-gray-600 group-hover:text-yellow-400 text-xs font-bold mb-2 tracking-widest uppercase transition">Subuh</p>
                    <p class="text-3xl font-bold text-[#0b3d2e] group-hover:text-white transition">{{ $jadwalSholat['subuh'] ?? '-' }}</p>
                </div>
                <div class="bg-[#fcfdfb] hover:bg-[#0b3d2e] group rounded-2xl p-5 text-center transition-all duration-300 border border-gray-200 shadow-sm cursor-default">
                    <p class="text-gray-600 group-hover:text-yellow-400 text-xs font-bold mb-2 tracking-widest uppercase transition">Dzuhur</p>
                    <p class="text-3xl font-bold text-[#0b3d2e] group-hover:text-white transition">{{ $jadwalSholat['dzuhur'] ?? '-' }}</p>
                </div>
                <div class="bg-[#fcfdfb] hover:bg-[#0b3d2e] group rounded-2xl p-5 text-center transition-all duration-300 border border-gray-200 shadow-sm cursor-default">
                    <p class="text-gray-600 group-hover:text-yellow-400 text-xs font-bold mb-2 tracking-widest uppercase transition">Ashar</p>
                    <p class="text-3xl font-bold text-[#0b3d2e] group-hover:text-white transition">{{ $jadwalSholat['ashar'] ?? '-' }}</p>
                </div>
                <div class="bg-[#fcfdfb] hover:bg-[#0b3d2e] group rounded-2xl p-5 text-center transition-all duration-300 border border-gray-200 shadow-sm cursor-default">
                    <p class="text-gray-600 group-hover:text-yellow-400 text-xs font-bold mb-2 tracking-widest uppercase transition">Maghrib</p>
                    <p class="text-3xl font-bold text-[#0b3d2e] group-hover:text-white transition">{{ $jadwalSholat['maghrib'] ?? '-' }}</p>
                </div>
                <div class="bg-[#fcfdfb] hover:bg-[#0b3d2e] group rounded-2xl p-5 text-center transition-all duration-300 border border-gray-200 shadow-sm cursor-default">
                    <p class="text-gray-600 group-hover:text-yellow-400 text-xs font-bold mb-2 tracking-widest uppercase transition">Isya</p>
                    <p class="text-3xl font-bold text-[#0b3d2e] group-hover:text-white transition">{{ $jadwalSholat['isya'] ?? '-' }}</p>
                </div>
            </div>
        </section>
    </div>

    <!-- SEKSI BERITA -->
    <section id="berita" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 text-left">
                <div>
                    <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-1">Kabar Musholla</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#0b3d2e]">Berita & Liputan Kegiatan</h2>
                </div>
                <a href="/berita" class="text-[15px] font-bold text-gray-600 hover:text-[#0b3d2e] transition mt-4 md:mt-0 flex items-center">
                    Lihat Semua Berita <span class="ml-1 text-lg leading-none">&rarr;</span>
                </a>
            </div>

            @if($beritaMasjid->isEmpty())
            <div class="text-center py-10 bg-gray-50 rounded-2xl border border-gray-200 border-dashed">
                <div class="text-4xl mb-3">📰</div>
                <p class="text-gray-600 font-semibold">Belum ada berita atau liputan kegiatan terbaru.</p>
            </div>
            @else
            <div class="relative w-full group" x-data="{ scrollNext() { $refs.newsContainer.scrollBy({ left: 370, behavior: 'smooth' }) }, scrollPrev() { $refs.newsContainer.scrollBy({ left: -370, behavior: 'smooth' }) } }">
                <button @click="scrollPrev()" class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#f59e0b] text-[#0b3d2e] w-12 h-12 rounded-full flex items-center justify-center shadow-lg border border-gray-200 transition"><svg class="w-6 h-6 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg></button>
                <div x-ref="newsContainer" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 pt-4 px-2 [&::-webkit-scrollbar]:hidden">
                    @foreach($beritaMasjid as $berita)
                    <div class="snap-center shrink-0 w-[300px] md:w-[350px] bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition duration-500 flex flex-col group/card hover:-translate-y-2">
                        <div class="h-56 bg-gray-200 relative overflow-hidden shrink-0">
                            @if($berita->thumbnail)
                            <img src="{{ asset('storage/' . $berita->thumbnail) }}" class="object-cover w-full h-full group-hover/card:scale-110 transition duration-700">
                            @else
                            <div class="w-full h-full flex items-center justify-center text-gray-500 font-medium bg-gray-100 text-sm">Tanpa Gambar</div>
                            @endif
                            <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-[#0b3d2e] shadow-sm">Kabar Utama</div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow relative">
                            <div class="absolute -top-6 right-6 bg-[#f59e0b] text-white py-2 px-3 rounded-xl shadow-lg text-center leading-tight">
                                <span class="block text-xl font-bold">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('d') }}</span>
                                <span class="block text-[11px] font-bold uppercase tracking-wider">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('M Y') }}</span>
                            </div>
                            <h3 class="font-bold text-xl text-gray-900 leading-snug mb-3 line-clamp-2 mt-2">{{ $berita->judul }}</h3>
                            <p class="text-[15px] text-gray-700 font-medium line-clamp-3 mb-6 leading-relaxed">{!! Str::limit(strip_tags($berita->konten), 120) !!}</p>
                            <div class="mt-auto border-t border-gray-200 pt-4 flex items-center justify-between">
                                <button wire:click="lihatBerita({{ $berita->id }})" class="text-[#0b3d2e] text-[15px] font-bold hover:text-[#f59e0b] transition flex items-center">
                                    Baca selengkapnya <svg class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button @click="scrollNext()" class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#f59e0b] text-[#0b3d2e] w-12 h-12 rounded-full flex items-center justify-center shadow-lg border border-gray-200 transition"><svg class="w-6 h-6 pl-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg></button>
            </div>
            @endif
        </div>
    </section>

    <!-- ARTIKEL INSPIRASI -->
    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 text-left">
                <div>
                    <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-1">Inspirasi Harian</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#0b3d2e]">Khazanah & Tausiyah Nasional</h2>
                </div>
                <a href="https://kalam.sindonews.com/" target="_blank" class="text-[15px] font-bold text-gray-600 hover:text-[#0b3d2e] transition mt-4 md:mt-0 flex items-center">
                    Sumber: Sindonews Kalam <span class="ml-1 text-lg leading-none">&rarr;</span>
                </a>
            </div>
            @if(empty($artikelEksternal))
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-10 text-center">
                <div class="text-gray-400 text-5xl mb-3">📡</div>
                <h3 class="text-lg font-bold text-gray-800 mb-1">Gagal Memuat Artikel</h3>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($artikelEksternal as $artikel)
                <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition duration-300 group flex flex-col">
                    <div class="h-48 overflow-hidden relative bg-gray-200">
                        <img src="{{ $artikel['thumbnail'] ?? 'https://via.placeholder.com/400x300?text=No+Image' }}" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-bold text-lg text-gray-900 leading-snug mb-2 line-clamp-2 group-hover:text-[#0b3d2e] transition">
                            <a href="{{ $artikel['link'] ?? '#' }}" target="_blank">{{ $artikel['title'] ?? 'Judul Tidak Tersedia' }}</a>
                        </h3>
                        <p class="text-sm font-semibold text-gray-600 mb-3 flex items-center">
                            <span class="mr-2">⏱</span>
                            @if(isset($artikel['pubDate']))
                            {{ \Carbon\Carbon::parse($artikel['pubDate'])->translatedFormat('d M Y - H:i') }} WIB
                            @endif
                        </p>
                        <p class="text-[15px] font-medium text-gray-700 line-clamp-3 mb-4 leading-relaxed">{{ $artikel['description'] ?? 'Deskripsi tidak tersedia' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- JADWAL PENGAJIAN -->
    <section id="kajian" class="py-16 bg-[#fdfbf6] border-y border-gray-200">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Ilmu & Dakwah</p>
            <h2 class="text-4xl font-bold text-[#0b3d2e] mb-10">Jadwal Pengajian</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                @forelse($kajians as $kajian)
                <div class="bg-white border border-gray-200 p-6 rounded-2xl shadow-md flex items-start space-x-4">
                    <div class="bg-green-100 text-green-800 p-3 rounded-xl text-2xl shadow-sm">📖</div>
                    <div>
                        <h4 class="font-bold text-xl text-gray-900">{{ $kajian->judul }}</h4>
                        <p class="text-[#d97706] text-[15px] font-bold mt-1">{{ $kajian->ustadz }}</p>
                        <p class="text-sm font-medium text-gray-600 mt-2 flex items-center"><span class="mr-1">📌</span> {{ $kajian->waktu }} • {{ $kajian->lokasi }}</p>
                    </div>
                </div>
                @empty
                <p class="text-gray-600 font-medium col-span-2 text-center">Belum ada jadwal kajian.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- GALERI & AGENDA -->
    <section id="galeri" class="py-24 w-full bg-gradient-to-b from-[#115e48] to-[#0b3d2e] relative overflow-hidden border-b-8 border-[#f59e0b]">
        <!-- Bagian Agenda -->
        <div class="max-w-6xl mx-auto px-4 mb-24 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 text-left">
                <div>
                    <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-1">Kegiatan</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-white">Agenda Terdekat</h2>
                </div>
            </div>
            @if($agendas->isEmpty())
            <div class="text-center">
                <p class="text-gray-100 font-medium text-[15px] bg-white/20 py-6 rounded-xl border border-white/30 inline-block px-10">Belum ada agenda kegiatan terdekat.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left max-w-5xl mx-auto">
                @foreach($agendas as $agenda)
                <div wire:click="lihatAgenda({{ $agenda->id }})" class="cursor-pointer bg-white p-6 rounded-2xl shadow-xl border-l-[6px] border-l-[#f59e0b] hover:shadow-2xl hover:-translate-y-2 transition duration-300">
                    <p class="text-[15px] text-[#0b3d2e] font-bold mb-2 flex items-center">📅 {{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d F Y') }}</p>
                    <p class="text-sm font-semibold text-gray-700 mb-4 flex items-center border-b border-gray-200 pb-3">⏰ {{ $agenda->waktu }}</p>
                    <h4 class="font-bold text-xl text-gray-900 mb-2 leading-snug">{{ $agenda->judul }}</h4>
                    <p class="text-[15px] text-gray-700 font-medium line-clamp-3">{{ $agenda->deskripsi }}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Bagian Galeri -->
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 text-left">
                <div>
                    <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-1">Dokumentasi</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-white">Galeri Kegiatan</h2>
                </div>
                <a href="/galeri" class="text-[15px] font-bold text-gray-200 hover:text-white transition mt-4 md:mt-0 flex items-center">
                    Lihat Semua Dokumentasi <span class="ml-1 text-lg leading-none">&rarr;</span>
                </a>
            </div>

            @if($galeris->isEmpty())
            <div class="text-center">
                <p class="text-gray-100 font-medium text-[15px] bg-white/20 py-6 rounded-xl border border-white/30 inline-block px-10">Belum ada foto dokumentasi.</p>
            </div>
            @else
            <div class="relative w-full group" x-data="{ scrollNext() { $refs.galleryContainer.scrollBy({ left: 340, behavior: 'smooth' }) }, scrollPrev() { $refs.galleryContainer.scrollBy({ left: -340, behavior: 'smooth' }) } }">
                <button @click="scrollPrev()" class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#f59e0b] text-[#0b3d2e] w-12 h-12 rounded-full flex items-center justify-center shadow-xl transition border border-gray-200 focus:outline-none"><svg class="w-6 h-6 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg></button>
                <div x-ref="galleryContainer" class="flex gap-5 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 pt-2 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                    @foreach($galeris as $galeri)
                    <div class="snap-center shrink-0 w-[280px] md:w-[320px] h-56 md:h-64 bg-black rounded-2xl overflow-hidden relative group/item shadow-lg border border-white/20">
                        <img src="{{ asset('storage/' . $galeri->foto) }}" class="object-cover w-full h-full transition-transform duration-700 group-hover/item:scale-110 opacity-80 group-hover/item:opacity-100" alt="{{ $galeri->judul }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent opacity-100 flex items-end p-5">
                            <p class="text-white text-base md:text-lg font-bold w-full text-left leading-tight drop-shadow-md">{{ $galeri->judul }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button @click="scrollNext()" class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-white hover:bg-[#f59e0b] text-[#0b3d2e] w-12 h-12 rounded-full flex items-center justify-center shadow-xl transition border border-gray-200 focus:outline-none"><svg class="w-6 h-6 pl-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg></button>
            </div>
            @endif
        </div>
    </section>

    <!-- PROFIL PENGURUS -->
    <section id="pengurus" class="py-16 bg-gray-50 border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Struktur</p>
            <h2 class="text-4xl font-bold text-[#0b3d2e] mb-12">Profil Pengurus</h2>
            <div class="flex flex-wrap justify-center gap-10">
                @forelse($pengurus as $orang)
                <div class="text-center w-40">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-white shadow-lg mb-4 bg-gray-200">
                        @if($orang->foto)
                        <img src="{{ asset('storage/' . $orang->foto) }}" class="object-cover object-top w-full h-full" alt="{{ $orang->nama }}">
                        @else
                        <div class="w-full h-full flex items-center justify-center text-gray-500 text-3xl">👤</div>
                        @endif
                    </div>
                    <h4 class="font-bold text-gray-900 text-[15px]">{{ $orang->nama }}</h4>
                    <p class="text-[#d97706] font-bold text-sm mt-1">{{ $orang->jabatan }}</p>
                </div>
                @empty
                <p class="text-gray-600 font-medium">Data pengurus belum ditambahkan.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- DONASI & INFAQ -->
    <section id="donasi" class="py-20 w-full bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Infaq & Sedekah</p>
            <h2 class="text-4xl font-bold text-[#0b3d2e] mb-10">Layanan Donasi Digital</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                <!-- Kartu Donasi 1 -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden flex flex-col group hover:-translate-y-2 transition duration-500">
                    <div class="bg-[#0b3d2e] py-6 px-6 text-center">
                        <h3 class="text-2xl font-bold text-white">Operasional Musholla</h3>
                        <p class="text-green-100 font-medium text-sm mt-1">Pembangunan & Kegiatan Rutin</p>
                    </div>
                    <div class="p-8 flex-grow flex flex-col items-center">
                        <p class="text-[15px] text-gray-700 font-bold mb-4 text-center">Scan QRIS menggunakan aplikasi E-Wallet atau M-Banking Anda:</p>
                        <div class="bg-white p-3 rounded-2xl shadow-lg border border-gray-100 mb-6 group-hover:scale-105 transition transform duration-500">
                            <img src="{{ asset('storage/images/qris-musholla.jpg') }}" alt="QRIS Musholla At-Taqwa" class="w-48 h-48 md:w-56 md:h-56 object-cover rounded-xl">
                        </div>
                        <div class="w-full bg-gray-50 border border-gray-200 rounded-2xl p-5 text-center mt-auto shadow-inner">
                            <p class="text-xs text-gray-600 font-bold uppercase tracking-wider mb-2">Atau Transfer Manual</p>
                            <img src="{{ asset('storage/images/logo-bri.jpg') }}" alt="Logo BRI" class="h-6 mx-auto mb-3 object-contain">
                            <p class="text-[15px] font-bold text-gray-800 mb-1">TABUNGAN MUSHOLLA</p>
                            <p class="text-2xl font-bold tracking-widest text-[#0b3d2e]">2075 0100 3836 532</p>
                        </div>
                    </div>
                </div>

                <!-- Kartu Donasi 2 -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden flex flex-col group hover:-translate-y-2 transition duration-500">
                    <div class="bg-gradient-to-r from-[#f59e0b] to-yellow-500 py-6 px-6 text-center">
                        <h3 class="text-2xl font-bold text-white">Santunan Yatim</h3>
                        <p class="text-yellow-100 font-medium text-sm mt-1">Program Pemberdayaan Anak Yatim</p>
                    </div>
                    <div class="p-8 flex-grow flex flex-col items-center">
                        <p class="text-[15px] text-gray-700 font-bold mb-4 text-center">Scan QRIS menggunakan aplikasi E-Wallet atau M-Banking Anda:</p>
                        <div class="bg-white p-3 rounded-2xl shadow-lg border border-gray-100 mb-6 group-hover:scale-105 transition transform duration-500">
                            <img src="{{ asset('storage/images/qris-yatim.jpg') }}" alt="QRIS Donasi Yatim" class="w-48 h-48 md:w-56 md:h-56 object-cover rounded-xl">
                        </div>
                        <div class="w-full bg-yellow-50 border border-yellow-200 rounded-2xl p-5 text-center mt-auto shadow-inner">
                            <p class="text-xs text-yellow-700 font-bold uppercase tracking-wider mb-2">Atau Transfer Manual</p>
                            <img src="{{ asset('storage/images/logo-bri.jpg') }}" alt="Logo BRI" class="h-6 mx-auto mb-3 object-contain">
                            <p class="text-[15px] font-bold text-gray-800 mb-1">TABUNGAN YATIM</p>
                            <p class="text-2xl font-bold tracking-widest text-[#f59e0b]">2075 0100 6096 539</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LAPORAN KEUANGAN & PAGINATION -->
    <section id="laporan" class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="max-w-5xl mx-auto px-4">
            <div class="text-center mb-10">
                <p class="text-[#f59e0b] font-bold text-sm uppercase tracking-widest mb-2">Transparansi</p>
                <h2 class="text-4xl font-bold text-[#0b3d2e]">Laporan Infaq & Sodaqoh</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="border border-green-200 bg-green-50 p-6 rounded-2xl shadow-sm">
                    <p class="text-green-700 text-[15px] font-bold flex items-center"><span class="mr-2">↓</span> Pemasukan</p>
                    <p class="text-2xl font-bold text-green-800 mt-2">Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</p>
                </div>
                <div class="border border-red-200 bg-red-50 p-6 rounded-2xl shadow-sm">
                    <p class="text-red-700 text-[15px] font-bold flex items-center"><span class="mr-2">↑</span> Pengeluaran</p>
                    <p class="text-2xl font-bold text-red-800 mt-2">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</p>
                </div>
                <div class="bg-[#0b3d2e] border border-[#0b3d2e] p-6 rounded-2xl text-white shadow-xl">
                    <p class="text-yellow-400 text-[15px] font-bold flex items-center"><span class="mr-2">💼</span> Saldo Kas</p>
                    <p class="text-3xl font-bold mt-2 text-white">Rp {{ number_format($saldoAkhir, 0, ',', '.') }}</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-green-100 text-green-900 text-[15px] border-b-2 border-green-200">
                                <th class="p-4 font-bold">Tanggal</th>
                                <th class="p-4 font-bold">Keterangan</th>
                                <th class="p-4 font-bold">Sumber</th>
                                <th class="p-4 font-bold text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="text-[15px]">
                            @forelse($riwayatTransaksi as $trx)
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                <td class="p-4 text-gray-700 font-medium">{{ \Carbon\Carbon::parse($trx->tanggal)->translatedFormat('l, d F Y') }}</td>
                                <td class="p-4 text-gray-900 font-bold">{{ $trx->keterangan }}</td>
                                <td class="p-4 text-gray-600 font-medium">{{ $trx->sumber }}</td>
                                <td class="p-4 text-right font-bold {{ $trx->jenis == 'pemasukan' ? 'text-green-700' : 'text-red-600' }}">
                                    {{ $trx->jenis == 'pemasukan' ? '+' : '-' }} Rp {{ number_format($trx->jumlah, 0, ',', '.') }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="p-6 text-center text-gray-600 font-bold bg-gray-50">Belum ada catatan transaksi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 font-medium">
                {{ $riwayatTransaksi->links() }}
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0b3d2e] pt-16 pb-8 border-t-[8px] border-[#f59e0b] text-gray-200">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 mb-12">
                <div class="md:pr-8">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo" class="h-14 w-14 rounded-full shadow-lg border-2 border-white/20">
                        <span class="text-3xl font-bold text-white tracking-wide">At-Taqwa</span>
                    </div>
                    <p class="text-[15px] font-medium leading-relaxed mb-8 text-gray-300">
                        Pusat ibadah, pendidikan, dan kegiatan sosial umat Islam. Bersama memakmurkan rumah Allah.
                    </p>

                    <!-- IKON SOSIAL MEDIA -->
                    <div class="flex space-x-4">
                        <!-- TIKTOK -->
                        <a href="https://www.tiktok.com/@musholla.attaqwa?is_from_webapp=1&sender_device=pc" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#f59e0b] hover:text-[#0b3d2e] transition duration-300 shadow-sm" aria-label="TikTok">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path>
                            </svg>
                        </a>
                        <!-- FACEBOOK -->
                        <a href="https://www.facebook.com/share/1D5sox1bD2/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#f59e0b] hover:text-[#0b3d2e] transition duration-300 shadow-sm" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <!-- INSTAGRAM -->
                        <a href="#" title="Akan Segera Hadir" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#f59e0b] hover:text-[#0b3d2e] transition duration-300 shadow-sm opacity-50 hover:opacity-100 cursor-not-allowed" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-[15px] border-l-4 border-[#f59e0b] pl-3">Tautan Cepat</h4>
                    <ul class="space-y-4 text-[15px] font-medium text-gray-300">
                        <li><a href="#jadwal" class="hover:text-yellow-400 transition inline-block">› Jadwal Sholat</a></li>
                        <li><a href="#berita" class="hover:text-yellow-400 transition inline-block">› Berita Musholla</a></li>
                        <li><a href="#galeri" class="hover:text-yellow-400 transition inline-block">› Agenda & Galeri</a></li>
                        <li><a href="#donasi" class="hover:text-yellow-400 transition inline-block">› Layanan ZISWAF</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-[15px] border-l-4 border-[#f59e0b] pl-3">Hubungi Kami</h4>
                    <ul class="space-y-5 text-[15px] font-medium text-gray-300">
                        <li class="flex items-start">
                            <span class="leading-relaxed">Musholla At-Taqwa<br>Jl. Sonton No.3 8, RT.3/RW.2, Lenteng Agung, Jakarta Selatan 12530</span>
                        </li>
                        <li>
                            <a href="https://maps.app.goo.gl/S31zifaVNFCSsJH88?g_st=aw" target="_blank" class="inline-flex items-center space-x-2 bg-white/10 hover:bg-[#f59e0b] hover:text-[#0b3d2e] transition px-5 py-3 rounded-xl text-yellow-400 font-bold border border-white/20">
                                <span>Buka di Google Maps</span>
                            </a>
                        </li>
                        <!-- WHATSAPP IKON -->
                        <li class="flex items-center mt-4">
                            <a href="https://wa.me/62895610018585" target="_blank" class="flex items-center group w-full cursor-pointer">
                                <div class="bg-white/10 p-2 rounded-lg mr-4 shrink-0 text-yellow-400 group-hover:bg-[#f59e0b] group-hover:text-[#0b3d2e] transition duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"></path>
                                    </svg>
                                </div>
                                <span class="font-bold text-yellow-400 group-hover:text-white transition duration-300">0895-6100-18585 (WA)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-sm font-medium text-gray-400">
                <p class="mb-4 md:mb-0">&copy; {{ \Carbon\Carbon::now()->format('Y') }} Musholla At-Taqwa. Seluruh hak cipta dilindungi.</p>
                <a href="/admin" class="hover:text-yellow-400 transition">Portal Pengurus</a>
            </div>
        </div>
    </footer>

    <!-- MODAL BERITA -->
    @if($detailBerita)
    <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-md" wire:click="tutupModal"></div>
        <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto">
            <button wire:click="tutupModal" class="absolute top-4 right-4 bg-gray-100 hover:bg-red-600 text-gray-900 hover:text-white w-12 h-12 rounded-full font-bold flex items-center justify-center transition shadow-md z-20">✖</button>
            @if($detailBerita->thumbnail)
            <div class="w-full h-64 md:h-80 relative">
                <img src="{{ asset('storage/' . $detailBerita->thumbnail) }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
            </div>
            @endif
            <div class="p-6 md:p-10">
                <p class="text-[#f59e0b] font-bold text-[15px] tracking-widest mb-3 uppercase">{{ \Carbon\Carbon::parse($detailBerita->tanggal_publikasi)->translatedFormat('l, d F Y') }}</p>
                <h2 class="text-3xl md:text-4xl font-bold text-[#0b3d2e] mb-8 leading-tight">{{ $detailBerita->judul }}</h2>
                <div class="prose prose-lg prose-green text-gray-800 font-medium max-w-none leading-relaxed">
                    {!! $detailBerita->konten !!}
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- MODAL AGENDA -->
    @if($detailAgenda)
    <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-md" wire:click="tutupModal"></div>
        <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-lg transform transition-all overflow-hidden">
            <div class="bg-[#0b3d2e] p-8 text-center relative border-b-8 border-[#f59e0b]">
                <button wire:click="tutupModal" class="absolute top-4 right-4 text-white hover:bg-red-600 w-10 h-10 rounded-full font-bold transition">✖</button>
                <div class="text-6xl mb-4 drop-shadow-md">📅</div>
                <h2 class="text-3xl font-bold text-white leading-tight">{{ $detailAgenda->judul }}</h2>
            </div>
            <div class="p-8">
                <div class="space-y-4 mb-8">
                    <div class="flex items-center text-gray-800 bg-gray-50 p-4 rounded-2xl border border-gray-200">
                        <span class="w-12 h-12 rounded-full bg-green-200 flex items-center justify-center text-green-900 mr-4 text-2xl shadow-sm">📆</span>
                        <div>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-0.5">Tanggal Pelaksanaan</p>
                            <p class="font-bold text-lg text-[#0b3d2e]">{{ \Carbon\Carbon::parse($detailAgenda->tanggal)->translatedFormat('l, d F Y') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-800 bg-gray-50 p-4 rounded-2xl border border-gray-200">
                        <span class="w-12 h-12 rounded-full bg-yellow-200 flex items-center justify-center text-yellow-900 mr-4 text-2xl shadow-sm">⏰</span>
                        <div>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-0.5">Waktu</p>
                            <p class="font-bold text-lg text-[#0b3d2e]">{{ $detailAgenda->waktu }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100 shadow-inner">
                    <p class="text-[15px] font-medium text-gray-800 leading-relaxed">{{ $detailAgenda->deskripsi }}</p>
                </div>
                <button wire:click="tutupModal" class="mt-8 w-full bg-[#0b3d2e] hover:bg-[#115e48] text-white font-bold text-lg py-4 rounded-xl transition shadow-lg">
                    Tutup Informasi
                </button>
            </div>
        </div>
    </div>
    @endif
</div>