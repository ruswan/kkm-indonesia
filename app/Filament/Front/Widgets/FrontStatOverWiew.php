<?php

namespace App\Filament\Front\Widgets;

use App\Models\Counselor;
use App\Models\Province;
use App\Models\Regency;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FrontStatOverWiew extends StatsOverviewWidget
{
    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('', Counselor::count())
                ->description(__('Counselors')),
            Stat::make('', Province::whereHas('counselors')->count())
                ->description(__('Province')),
            Stat::make('', Regency::whereHas('counselors')->count())
                ->description(__('Regency')),
        ];
    }
}
