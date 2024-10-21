<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategorypengurusResource\Pages;
use App\Filament\Resources\CategorypengurusResource\RelationManagers;
use App\Models\Categorypengurus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategorypengurusResource extends Resource
{
    protected static ?string $model = Categorypengurus::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-arrow-down';

    protected static ?string $navigationGroup = 'Profile';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            TextInput::make('tahun')
                                ->required()
                                ->maxLength(255),
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListCategorypenguruses::route('/'),
            'create' => Pages\CreateCategorypengurus::route('/create'),
            'edit' => Pages\EditCategorypengurus::route('/{record}/edit'),
        ];
    }
}
