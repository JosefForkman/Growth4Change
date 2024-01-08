<x-filament::page>
 <form wire:submit.prevent="save">
 {{ $this->form }}
 </form>
 <div class="grid justify-items-start">
 <x-filament::button type="submit" class="mt-4">
   Save Changes
 </x-filament::button>
 </div>
</x-filament::page>
