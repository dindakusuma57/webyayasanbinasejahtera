<?php

namespace App\Filament\Resources\CategorypengurusResource\Pages;

use App\Filament\Resources\CategorypengurusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategorypenguruses extends ListRecords
{
    protected static string $resource = CategorypengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
