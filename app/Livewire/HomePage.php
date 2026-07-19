<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 
use App\Models\Article;
use App\Models\Announcement;
use App\Models\Kajian;
use App\Models\Management;
use App\Models\Transaction;
use App\Models\Agenda;
use App\Models\Gallery;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Livewire\Attributes\Title;

#[Title('Musholla At-Taqwa')]
class HomePage extends Component
{
    use WithPagination; // Aktifkan fitur penomoran halaman

    // --- PROPERTY UNTUK MODAL POP-UP ---
    public $detailBerita = null;
    public $detailAgenda = null;

    // --- FUNGSI KLIK LIHAT BERITA ---
    public function lihatBerita($id)
    {
        $this->detailBerita = Article::find($id);
    }

    // --- FUNGSI KLIK LIHAT AGENDA ---
    public function lihatAgenda($id)
    {
        $this->detailAgenda = Agenda::find($id);
    }

    // --- FUNGSI TUTUP MODAL ---
    public function tutupModal()
    {
        $this->detailBerita = null;
        $this->detailAgenda = null;
    }

    // --- FUNGSI RENDER TAMPILAN ---
    public function render()
    {
        // --- FETCH PENGUMUMAN & PENGURUS ---
        $pengumuman = Announcement::where('is_active', true)
            ->orderBy('tanggal_pelaksanaan', 'asc')
            ->first();

        $kajians = Kajian::all();
        $pengurus = Management::orderBy('urutan', 'asc')->get();

        // --- FETCH TRANSAKSI & KEUANGAN (DENGAN PAGINATION) ---
        $totalPemasukan = Transaction::where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaction::where('jenis', 'pengeluaran')->sum('jumlah');
        $saldoAkhir = $totalPemasukan - $totalPengeluaran;

        // Mengambil 10 data transaksi per halaman
        $riwayatTransaksi = Transaction::orderBy('tanggal', 'desc')->paginate(10);

        // --- FETCH JADWAL SHOLAT API ---
        $cityId = '1304'; // Jakarta Selatan
        $date = Carbon::now()->format('Y/m/d');

        $jadwalSholat = Cache::remember("jadwal_sholat_{$cityId}_{$date}", 86400, function () use ($cityId, $date) {
            try {
                $response = Http::timeout(5)->get("https://api.myquran.com/v2/sholat/jadwal/{$cityId}/{$date}");
                if ($response->successful()) {
                    return $response->json()['data']['jadwal'];
                }
            } catch (\Exception $e) {
            }

            return [
                'subuh' => '04:43',
                'dzuhur' => '11:59',
                'ashar' => '15:21',
                'maghrib' => '17:53',
                'isya' => '19:07',
            ];
        });

        // --- FETCH AGENDA & GALERI ---
        $agendas = Agenda::where('tanggal', '>=', Carbon::today())
            ->orderBy('tanggal', 'asc')
            ->take(3)
            ->get();

        $galeris = Gallery::orderBy('created_at', 'desc')->take(15)->get();

        // --- FETCH BERITA INTERNAL MASJID ---
        $beritaMasjid = Article::orderBy('tanggal_publikasi', 'desc')->take(10)->get();

        // --- FETCH ARTIKEL EKSTERNAL (API Sindonews Kalam) ---
        $artikelEksternal = Cache::remember('artikel_eksternal_sindonews', 7200, function () {
            try {
                $response = Http::withHeaders(['User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'])
                    ->timeout(7)
                    ->get('https://api-berita-indonesia.vercel.app/sindonews/kalam/');

                if ($response->successful()) {
                    return array_slice($response->json()['data']['posts'], 0, 3);
                }
            } catch (\Exception $e) {
            }

            return [
                [
                    'title' => 'Keutamaan Membaca Surah Al-Kahfi di Hari Jumat',
                    'pubDate' => Carbon::now()->subHours(2)->toIso8601String(),
                    'description' => 'Membaca surat Al-Kahfi pada hari Jumat memiliki banyak keutamaan, salah satunya adalah disinari cahaya antara dua Jumat dan diampuni dosanya.',
                    'thumbnail' => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=400',
                    'link' => 'https://kalam.sindonews.com/'
                ],
                [
                    'title' => 'Adab Masuk Masjid yang Perlu Diketahui Jamaah',
                    'pubDate' => Carbon::now()->subHours(5)->toIso8601String(),
                    'description' => 'Masjid adalah rumah Allah. Terdapat adab-adab tertentu yang diajarkan oleh Rasulullah SAW saat kita memasukinya, seperti mendahulukan kaki kanan.',
                    'thumbnail' => 'https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&q=80&w=400',
                    'link' => 'https://kalam.sindonews.com/'
                ],
                [
                    'title' => 'Menjaga Tali Silaturahmi Jamaah di Era Digital',
                    'pubDate' => Carbon::now()->subDay()->toIso8601String(),
                    'description' => 'Teknologi seharusnya mendekatkan yang jauh, bukan menjauhkan yang dekat. Berikut adalah pandangan Islam mengenai etika bersosial media.',
                    'thumbnail' => 'https://images.unsplash.com/photo-1519817914152-22d216bb9170?q=80&w=400',
                    'link' => 'https://kalam.sindonews.com/'
                ]
            ];
        });

        // --- RETURN KE BLADE ---
        return view('livewire.home-page', compact(
            'pengumuman',
            'kajians',
            'pengurus',
            'totalPemasukan',
            'totalPengeluaran',
            'saldoAkhir',
            'riwayatTransaksi',
            'jadwalSholat',
            'agendas',
            'galeris',
            'artikelEksternal',
            'beritaMasjid'
        ));
    }
}
