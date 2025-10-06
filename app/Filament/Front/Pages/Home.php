<?php

namespace App\Filament\Front\Pages;

use App\Filament\Front\Widgets\FrontCounselorTable;
use Filament\Pages\Page;
use Filament\Panel;

class Home extends Page
{
    protected static string $routePath = '/';

    protected static ?int $navigationSort = -2;

    protected static ?string $navigationLabel = 'Beranda';

    protected string $view = 'filament.front.pages.home';

    public static function getRoutePath(Panel $panel): string
    {
        return static::$routePath;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            FrontCounselorTable::class,
        ];
    }
}
