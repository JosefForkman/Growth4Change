<?php

namespace App\Helpers;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use app\Helpers\Filament as HelpersFilament;

class Filament
{
    public static function PageForm(): Builder
    {
        return Builder::make('content')
            ->label('body')
            ->columnSpan(2)
            ->schema([

                /* Text Block */
                Block::make('Text Block')
                    ->schema([
                        TextInput::make('Heading')
                            ->required(),
                        Section::make('Image')
                            ->description('Add an image for this Text Block')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('Image'),
                                TextInput::make('Alt')
                                    ->placeholder('the alt text should describe what is in the picture')
                                    ->maxLength(255),
                                Checkbox::make('ImageRight')
                                    ->helperText('Check this box if you want the image to be on the right side of the text')
                            ]),
                        Repeater::make('Description')
                            ->helperText('Add a description')
                            ->schema([
                                Textarea::make('Description')
                                    ->required()
                            ])
                    ]),


                /* Changemakers block */
                Block::make('Changemakers')
                    ->schema([
                        Repeater::make('Image')
                            ->helperText('Add a Changemaker')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('Image')
                                    ->required(),
                                TextInput::make('Alt')
                                    ->placeholder('the alt text should describe what is in the picture')
                                    ->maxLength(255)
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
