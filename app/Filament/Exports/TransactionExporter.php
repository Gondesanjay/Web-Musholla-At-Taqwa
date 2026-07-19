<?php

namespace App\Filament\Exports;

use App\Models\Transaction;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class TransactionExporter extends Exporter
{
    protected static ?string $model = Transaction::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('tanggal')
                ->label('Tanggal Transaksi'),
            ExportColumn::make('keterangan')
                ->label('Keterangan / Uraian'),
            ExportColumn::make('jenis')
                ->label('Arus Kas (Pemasukan/Pengeluaran)'),
            ExportColumn::make('sumber')
                ->label('Sumber Dana'),
            ExportColumn::make('jumlah')
                ->label('Nominal (Rp)'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Laporan kas Anda telah berhasil diproses dan siap diunduh.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' Namun, ada ' . number_format($failedRowsCount) . ' baris yang gagal diproses.';
        }

        return $body;
    }
}
