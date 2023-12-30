<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->autofocus()
                    ->required()
                    ->unique()
                    ->columnSpan(1),
                Builder::make('structure')
                    ->blocks([
                        Block::make('Paragraph')
                            ->schema([
                                Builder::make('content')
                                    ->blocks([
                                        Block::make('Header')
                                            ->schema([
                                                TextInput::make('content')
                                                    ->label('Heading')
                                                    ->required(),
                                                Select::make('level')
                                                    ->options([
                                                        'h1' => 'Heading 1',
                                                        'h2' => 'Heading 2',
                                                        'h3' => 'Heading 3',
                                                        'h4' => 'Heading 4',
                                                        'h5' => 'Heading 5',
                                                        'h6' => 'Heading 6',
                                                    ])
                                                    ->required(),
                                            ])
                                            ->maxItems(1),
                                        Block::make('Text')
                                            ->schema([
                                                Textarea::make('text')
                                                    ->required()
                                                    ->placeholder('Text')
                                                    ->columnSpan(2),
                                            ])
                                            ->maxItems(2),
                                        Block::make('Image')
                                            ->schema([
                                                SpatieMediaLibraryFileUpload::make('image')
                                                    ->image()
                                                    ->imageEditor()
                                                    ->required(),
                                                TextInput::make('alt')
                                                    ->placeholder('Alt text')
                                                    ->required(),
                                            ])
                                    ])
                            ]),
                        Block::make('FlipCard')
                            ->schema([
                                TextInput::make('Heading')
                                    ->required(),
                                Builder::make('Cards')
                                    ->blocks([
                                        Block::make('card')
                                            ->schema([
                                                SpatieMediaLibraryFileUpload::make('image')
                                                    ->image()
                                                    ->imageEditor()
                                                    ->required(),
                                                TextInput::make('alt')
                                                    ->placeholder('Alt text')
                                                    ->required(),
                                                TextInput::make('Heading')
                                                    ->required(),
                                                Textarea::make('Front Text')
                                                    ->required()
                                                    ->placeholder('Front Text')
                                                    ->columnSpan(2),
                                                Textarea::make('Back Text')
                                                    ->placeholder('Back Text')
                                                    ->columnSpan(2),
                                            ])
                                            ->maxItems(3),
                                    ])
                            ]),
                    ])
                    ->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->alignCenter(),
            ])
            ->filters([
                //
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
