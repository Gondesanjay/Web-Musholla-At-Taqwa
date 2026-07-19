<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KajianResource\Pages;
use App\Filament\Resources\KajianResource\RelationManagers;
use App\Models\Kajian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class KajianResource extends Resource
{
    protected static ?string $model = Kajian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('ex: Kajian Tafsir Al-Qur\'an'),
                TextInput::make('ustadz')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('ex: Ust. Abdullah Hakim'),
                TextInput::make('waktu')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('ex: Setiap Ahad • Ba\'da Subuh'),
                TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('ex: Ruang Utama'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->searchable(),
                TextColumn::make('ustadz')->searchable(),
                TextColumn::make('waktu'),
                TextColumn::make('lokasi'),
            ])
            ->filters([])
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
            'index' => Pages\ListKajians::route('/'),
            'create' => Pages\CreateKajian::route('/create'),
            'edit' => Pages\EditKajian::route('/{record}/edit'),
        ];
    }
}
