<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Card::make()->schema([
                    \Filament\Forms\Components\TextInput::make('judul')
                        ->required()
                        ->maxLength(255)
                        ->label('Judul Berita/Artikel'),

                    \Filament\Forms\Components\DatePicker::make('tanggal_publikasi')
                        ->required()
                        ->default(now())
                        ->label('Tanggal Publikasi'),

                    \Filament\Forms\Components\FileUpload::make('thumbnail')
                        ->image()
                        ->directory('berita-masjid')
                        ->label('Foto Thumbnail (Opsional)'),

                    \Filament\Forms\Components\RichEditor::make('konten')
                        ->required()
                        ->label('Isi Berita')
                        ->columnSpanFull(), // Agar editor teksnya lebar penuh
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Foto'),
                \Filament\Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->label('Judul'),
                \Filament\Tables\Columns\TextColumn::make('tanggal_publikasi')
                    ->date('d M Y')
                    ->sortable()
                    ->label('Tanggal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                \Filament\Tables\Actions\EditAction::make(),
                \Filament\Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Tables\Actions\BulkActionGroup::make([
                    \Filament\Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
