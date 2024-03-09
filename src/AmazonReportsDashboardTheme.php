<?php

namespace amazonreports\AmazonReportsDashboard;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class AmazonReportsDashboard implements Plugin
{
    public function getId(): string
    {
        return 'amazonreports';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('amazonreports', __DIR__ . '/../resources/dist/amazonreports.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('amazonreports');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
