<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;
use App\Models\Article;
use App\Models\Agenda;
use Carbon\Carbon;

class DashboardStatsOverview extends BaseWidget
{
    // Mengatur urutan tampilan widget (muncul paling atas)
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // Menghitung Saldo Kas
        $totalPemasukan = Transaction::where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaction::where('jenis', 'pengeluaran')->sum('jumlah');
        $saldoKas = $totalPemasukan - $totalPengeluaran;

        // Menghitung Agenda yang akan datang
        $agendaAktif = Agenda::where('tanggal', '>=', Carbon::today())->count();

        // Menghitung Total Berita
        $totalBerita = Article::count();

        return [
            Stat::make('Total Saldo Kas', 'Rp ' . number_format($saldoKas, 0, ',', '.'))
                ->description('Pemasukan dikurangi Pengeluaran')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]), // Grafik mini (Sparkline) buatan

            Stat::make('Agenda Mendatang', $agendaAktif . ' Kegiatan')
                ->description('Agenda aktif yang belum terlaksana')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('warning'),

            Stat::make('Total Berita', $totalBerita . ' Artikel')
                ->description('Berita & dokumentasi dipublikasi')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary'),
        ];
    }
}
