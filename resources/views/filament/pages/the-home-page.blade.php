<x-filament::page>
    <form wire:submit.prevent="save">
        {{ $this->form }}
        <div class="grid justify-items-start">
            <x-filament::button type="submit" style="margin-top: 2rem">
                Save Changes
            </x-filament::button>
        </div>
    </form>
</x-filament::page>
