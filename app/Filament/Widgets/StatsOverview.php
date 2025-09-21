<?php

namespace App\Filament\Widgets;

use App\Models\Counselor;
use App\Models\Event;
use App\Models\Province;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(__('Members'), Counselor::count())
                ->icon('heroicon-o-users')
                ->color('success'),
            Stat::make(__('Provinces'), Province::count())
                ->icon('heroicon-o-map')
                ->color('primary'),
            Stat::make(__('Events'), Event::count())
                ->icon('heroicon-o-calendar')
                ->color('warning'),
        ];
    }
}
