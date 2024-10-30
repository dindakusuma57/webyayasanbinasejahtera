<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontakResource\Pages;
use App\Models\Kontak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Grid;

class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kontak';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            MarkdownEditor::make('alamat')
                                ->columnSpanFull(),

                            MarkdownEditor::make('email')
                                ->required()
                                ->columnSpanFull(),

                            MarkdownEditor::make('no_telp')
                                ->required()
                                ->columnSpanFull(),

                            MarkdownEditor::make('sosmed')
                                ->columnSpanFull(),

                            MarkdownEditor::make('map')
                                ->columnSpanFull(),
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_telp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosmed')
                    ->searchable(),
                Tables\Columns\TextColumn::make('map')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKontaks::route('/'),
            'create' => Pages\CreateKontak::route('/create'),
            'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }
}
