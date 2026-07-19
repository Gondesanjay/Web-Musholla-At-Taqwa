<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagementResource\Pages;
use App\Filament\Resources\ManagementResource\RelationManagers;
use App\Models\Management;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManagementResource extends Resource
{
    protected static ?string $model = Management::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->helperText('Angka lebih kecil akan tampil lebih dulu (ex: 1 untuk Ketua)'),
                FileUpload::make('foto')
                    ->image()
                    ->imageEditor() // Mengaktifkan fitur edit/crop gambar
                    ->imageEditorAspectRatios([
                        '1:1', // Memaksa rasio potongan menjadi persegi (kotak)
                    ])
                    ->directory('pengurus') // Foto akan masuk ke folder storage/app/public/pengurus
                    ->columnSpanFull(), // Spasi dihapus, penulisan yang benar adalah columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->circular(), // Membuat foto tampil bulat di tabel
                TextColumn::make('nama')->searchable(),
                TextColumn::make('jabatan')->searchable(),
                TextColumn::make('urutan')->sortable(),
            ])
            ->defaultSort('urutan', 'asc') // Mengurutkan otomatis berdasarkan kolom urutan
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManagement::route('/'),
            'create' => Pages\CreateManagement::route('/create'),
            'edit' => Pages\EditManagement::route('/{record}/edit'),
        ];
    }
}
