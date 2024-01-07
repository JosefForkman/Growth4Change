{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<section class="flex flex-col gap-y-2" aria-labelledby="carouselheading">
    <h2 id="carouselheading" class="text-4xl font-heading text-growthgreen xl:text-6xl">Changemakers</h2>
    <ul
        class="grid justify-items-start items-center overflow-auto gap-6 scroll-smooth snap-x snap-mandatory"
        style="grid-template-columns: repeat({{ $this->sponsors->count() }}, auto);"
    >

        @foreach ($this->sponsors as $sponsor)
                <li class="w-80 snap-center">
                    <img
                        src="{{ $sponsor->getFirstMediaUrl() }}"
                        alt="{{ $sponsor->name }}"
                        class="object-cover w-full" />
                </li>
        @endforeach
    </ul>

</section>
