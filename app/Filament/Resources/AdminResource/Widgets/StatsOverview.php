<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use App\Models\Kajian;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    // Mengatur agar widget ini tampil paling atas di halaman Dashboard
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // 1. Menghitung Saldo Kas Keseluruhan
        $totalPemasukan = Transaction::where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaction::where('jenis', 'pengeluaran')->sum('jumlah');
        $saldoKas = $totalPemasukan - $totalPengeluaran;

        // 2. Menghitung Pemasukan Khusus Bulan Ini
        $pemasukanBulanIni = Transaction::where('jenis', 'pemasukan')
            ->whereMonth('tanggal', Carbon::now()->month)
            ->whereYear('tanggal', Carbon::now()->year)
            ->sum('jumlah');

        // 3. Menghitung Jumlah Kajian
        $jumlahKajian = Kajian::count();

        return [
            // Card 1: Saldo Kas
            Stat::make('Saldo Kas Saat Ini', 'Rp ' . number_format($saldoKas, 0, ',', '.'))
                ->description('Total dana masjid tersedia')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),

            // Card 2: Pemasukan Bulan Ini
            Stat::make('Pemasukan Bulan Ini', 'Rp ' . number_format($pemasukanBulanIni, 0, ',', '.'))
                ->description('Periode ' . Carbon::now()->translatedFormat('F Y'))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17]), // Menambahkan grafik kecil pemanis (dummy data trend)

            // Card 3: Total Kajian
            Stat::make('Total Kajian', $jumlahKajian . ' Program')
                ->description('Jadwal kajian terdaftar')
                ->descriptionIcon('heroicon-m-book-open')
                ->color('warning'),
        ];
    }
}
