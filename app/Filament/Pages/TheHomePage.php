<?php

namespace App\Filament\Pages;

use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Pages\Actions\Actions;
use App\Models\HomePage;

class TheHomePage extends Page implements HasForms
{
    use InteractsWithForms;

    public $name;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.the-home-page';

    public function mount()
    {
        // Get the current name from the database
        $currentName = HomePage::first()->name;

        // Set the initial value of the $name property
        $this->name = $currentName;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())->columns(2);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->placeholder('The name of the Home Page, e.g. About')
                ->autofocus()
                ->required(),
        ];
    }

    protected function getFormActions($form): array
    {
        return [];
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $record = HomePage::first();
        $record->name = $this->name;
        $record->save();
    }
}
