<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Builder;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Pages\EditRecord;


class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->placeholder('The name of the page')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->live()
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->placeholder('The slug in lower case and dashes, e.g. resources or food-is-politics')
                    ->required()
                    ->maxLength(255),


                Builder::make('content')
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
                            ])
                    ]),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('slug'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
