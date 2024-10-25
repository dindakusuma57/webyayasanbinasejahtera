<?php

namespace App\Filament\Resources\PesanResource\Widgets;

use App\Models\Pesan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PesanStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pesan Baru', Pesan::query()->where('pesan')->count())
        ];
    }
}

