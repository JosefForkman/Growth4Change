<section class="flex flex-col gap-y-2" aria-labelledby="carouselheading">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h2 id="carouselheading" class="text-4xl font-heading text-growthgreen xl:text-6xl">Changemakers</h2>
    <ul class="flex gap-x-11 overflow-x-scroll h-32">
    @foreach ($this->sponsors as $sponsor)
    @if ($sponsor->getFirstMediaUrl())
        <li class="h-32 flex-grow">
            <img
                src="{{ $sponsor->getFirstMediaUrl() }}"
                alt="{{ $sponsor->name }}"
                class="h-full object-cover" />
        </li>
        <li class="h-32 flex-grow">
            <img
                src="{{ $sponsor->getFirstMediaUrl() }}"
                alt="{{ $sponsor->name }}"
                class="h-full object-cover" />
        </li>
        <li class="h-32 flex-grow">
            <img
                src="{{ $sponsor->getFirstMediaUrl() }}"
                alt="{{ $sponsor->name }}"
                class="h-full object-cover" />
        </li>
        <li class="h-32 flex-grow">
            <img
                src="{{ $sponsor->getFirstMediaUrl() }}"
                alt="{{ $sponsor->name }}"
                class="h-full object-cover h-32" />
        </li>

    @endif
    @endforeach
    </ul>
    <ul class="flex gap-x-4 justify-center">
        <li>
            <button class="w-4 h-4 bg-growthdarkgrey rounded-full"></button>
        </li>
        <li>
            <button class="w-4 h-4 bg-growthlightgrey rounded-full"></button>
        </li>
        <li>
            <button class="w-4 h-4 bg-growthlightgrey rounded-full"></button>
        </li>

        <li>
            <button><x-fas-chevron-left class="h-4" aria-label="Previous Item"/></button>
        </li>
        <li>
            <button><x-fas-chevron-right class="h-4" aria-label="Previous Item"/></button>
        </li>
    </ul>
</section>
