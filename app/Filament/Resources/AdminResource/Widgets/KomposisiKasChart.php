<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Transaction;

class KomposisiKasChart extends ChartWidget
{
    protected static ?string $heading = 'Komposisi Transaksi (Total Keseluruhan)';
    
    protected static ?int $sort = 3; 

    // TINGGI MAKSIMAL GRAFIK (TAMBAHKAN BARIS INI)
    protected static ?string $maxHeight = '280px';

    protected function getData(): array
    {
        // Mengambil total semua uang masuk dan keluar
        $totalPemasukan = Transaction::where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaction::where('jenis', 'pengeluaran')->sum('jumlah');

        return [
            'datasets' => [
                [
                    'label' => 'Total Keseluruhan (Rp)',
                    'data' => [$totalPemasukan, $totalPengeluaran],
                    'backgroundColor' => ['#10b981', '#ef4444'], // Hijau untuk Pemasukan, Merah untuk Pengeluaran
                    'borderWidth' => 0, // Menghilangkan garis pinggir agar terlihat modern
                    'hoverOffset' => 5 // Efek membesar saat disentuh mouse
                ],
            ],
            'labels' => ['Total Pemasukan', 'Total Pengeluaran'],
        ];
    }

    protected function getType(): string
    {
        // Mengubah bentuk grafik menjadi Donat (Doughnut)
        return 'doughnut';
    }
}
