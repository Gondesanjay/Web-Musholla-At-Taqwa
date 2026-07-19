<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Transaction;

class KeuanganChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Arus Kas (Tahun Ini)';

    protected static ?int $sort = 2;

    // TINGGI MAKSIMAL GRAFIK (TAMBAHKAN BARIS INI)
    protected static ?string $maxHeight = '280px';

    protected function getData(): array
    {
        $tahunIni = date('Y');
        $pemasukanPerBulan = [];
        $pengeluaranPerBulan = [];
        $labelBulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];

        // Melakukan looping dari bulan 1 sampai 12 untuk mengambil total data
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $pemasukanPerBulan[] = Transaction::where('jenis', 'pemasukan')
                ->whereYear('tanggal', $tahunIni)
                ->whereMonth('tanggal', $bulan)
                ->sum('jumlah');

            $pengeluaranPerBulan[] = Transaction::where('jenis', 'pengeluaran')
                ->whereYear('tanggal', $tahunIni)
                ->whereMonth('tanggal', $bulan)
                ->sum('jumlah');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pemasukan (Rp)',
                    'data' => $pemasukanPerBulan,
                    'backgroundColor' => '#10b981', // Hijau
                    'borderRadius' => 4, // Ujung batang membulat agar modern
                ],
                [
                    'label' => 'Pengeluaran (Rp)',
                    'data' => $pengeluaranPerBulan,
                    'backgroundColor' => '#ef4444', // Merah
                    'borderRadius' => 4,
                ],
            ],
            'labels' => $labelBulan,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Menampilkan grafik dalam bentuk Batang vertikal
    }
}
