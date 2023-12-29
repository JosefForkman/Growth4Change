<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;


class About extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.about';

    protected static ?string $navigationGroup = 'Pages';

}
