<?php

namespace App\Filament\Resources;

use Illuminate\Validation\Rule;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components;
use Filament\Tables\Columns;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Hidden::make('id'),
                Components\TextInput::make('name')->autofocus()->required(),
                Components\TextInput::make('slug')
                    ->required(fn ($record) => $record && !$record->is_home),
                Components\Checkbox::make('is_home')->default(false),
                Components\Repeater::make('content_blocks')
                    ->schema([
                        Components\Textarea::make('content')->rows(3),
                    ])
                    ->label('Content Blocks'),
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

    public static function validateRecord($record, $validator)
    {
        $rules = [
            'name' => 'required',
            'slug' => Rule::unique('pages', 'slug')->ignore($record->id),
            'is_home' => 'boolean',
        ];

        if (!$record->is_home) {
            $rules['slug'] .= '|required';
        }

        $validator->validate($rules);
    }
}
