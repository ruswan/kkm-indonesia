<?php

namespace App\Filament\Front\Widgets;

use App\Models\Event;
use App\Models\Province;
use App\Models\Counselor;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FrontStatOverWiew extends StatsOverviewWidget
{
    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make(__('Counselors'), Counselor::count())
                ->icon('heroicon-o-users')
                ->color('success'),
            Stat::make(__('Provinces'), Counselor::whereHas('province')->count())
                ->icon('heroicon-o-map')
                ->color('primary'),
            Stat::make(__('Regencies'), Counselor::whereHas('regency')->count())
                ->icon('heroicon-o-map-pin')
                ->color('warning'),
        ];
    }
}
