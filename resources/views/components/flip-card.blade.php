<article aria-labelledby="title" x-data="{ open: false }" class="w-80 md:w-[400px] xl:w-[500px]"
    :class="open ? 'border-t-4 border-growthgreen' : ''">
    <img class="rounded-t-lg" :class="open ? 'hidden' : 'block'" src="{{ $image }}"
        alt="Random image from picsum photos">

    {{-- continerBody --}}
    <div class="grid gap-y-4 p-4 border-4 border-t-0 border-growthgreen rounded-b-lg transition-all duration-500"
        :class="open ? 'card-body-row-active' : 'card-body-row'">
        <h3 class="font-heading text-growthgreen text-2xl md:text-3xl xl:text-4xl" id="title">{{ $title }}</h3>

        {{-- front --}}
        <div class="flex flex-col gap-y-4 overflow-hidden">
            <p class="font-body text-white text-lg md:text-xl xl:text-2xl "
                :class="open ? 'line-clamp-none' : 'line-clamp-4'">
                {{$shortDescription}}
            </p>
            <button class="font-heading bg-growthgreen rounded text-white p-2 w-32" :class="open ? 'hidden' : 'block'"
                x-on:click="open = true">READ
                MORE</button>
        </div>

        {{-- back --}}
        <div class="flex flex-col gap-y-4 overflow-hidden transition-all duration-500"
            :class="open ? 'opacity-100' : 'opacity-0'">
            <p class="font-body text-white text-lg md:text-xl xl:text-2xl">
                {{$extendedDescription}}
            </p>
            <button class="font-heading bg-growthgreen rounded text-white p-2 w-32" x-on:click="open = false">READ
                LESS</button>
        </div>
    </div>
</article>
