<section class="flex flex-col gap-y-2">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h2 class="text-4xl font-heading text-growthgreen xl:text-6xl">Changemakers</h2>
    <div class="flex gap-x-11 overflow-auto h-32 scroll-smooth snap-x">
        @foreach ($this->sponsors as $sponsor)
        @if ($sponsor->getFirstMediaUrl())
        <img
            src="{{ $sponsor->getFirstMediaUrl() }}"
            alt="{{ $sponsor->name }}"
            class="object-cover snap-center" />
        @else
            <h3 class="font-bold text-center text-2xl self-center snap-center">{{ $sponsor->name }}</h3>
        @endif
        @endforeach
    </div>
    <div class="flex gap-x-4 justify-center">
        <button class="w-4 h-4 bg-growthdarkgrey rounded-full"></button>
        <button class="w-4 h-4 bg-growthlightgrey rounded-full"></button>
        <button class="w-4 h-4 bg-growthlightgrey rounded-full"></button>

        <button><x-fas-chevron-right class="h-4" /></button>
    </div>
</section>
