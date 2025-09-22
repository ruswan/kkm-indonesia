<?php

namespace App\Filament\Front\Pages;

use Filament\Pages\Page;
use Filament\Panel;

class Home extends Page
{
    protected static string $routePath = '/';

    protected static ?int $navigationSort = -2;

    protected static ?string $navigationLabel = 'Home';

    protected string $view = 'filament.front.pages.home';

    public static function getRoutePath(Panel $panel): string
    {
        return static::$routePath;
    }
}
