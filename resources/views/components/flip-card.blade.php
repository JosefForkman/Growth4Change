<article aria-labelledby="title" x-data="{ open: false }" class="w-[500px]" :class="open ? 'border-t-4 border-growthgreen' : ''">
    <img class="rounded-t-lg" :class="open ? 'hidden' : 'block'" src="https://picsum.photos/500/330?random=1"
        alt="Random image from picsum photos">

    {{-- continerBody --}}
    <div class="grid gap-y-4 p-4 border-4 border-t-0 border-growthgreen rounded-b-lg transition-all duration-500"
        :class="open ? 'card-body-row-active' : 'card-body-row'">
        <h3 class="font-heading text-growthgreen text-2xl md:text-3xl xl:text-4xl" id="title">Sample Title</h3>

        {{-- front --}}
        <div class="flex flex-col gap-y-4 overflow-hidden">
            <p class="font-body text-white text-lg md:text-xl xl:text-2xl "
                :class="open ? 'line-clamp-none' : 'line-clamp-4'">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis sem purus, tempus at fermentum a, pulvinar ac
                lectus. Sed fermentum arcu scelerisque sapien
                condimentum, quis ornare eros ultricies. Sed ullamcorper
                in augue quis dignissim. Suspendisse vitae ligula
                libero. Morbi ex neque, convallis eget vulputate id,
                iaculis id risus. Nulla lacus dolor, consectetur in
                lacinia ac, vehicula eget magna. Etiam dapibus arcu
                diam, eget convallis mi facilisis eget.
            </p>
            <button class="font-heading bg-growthgreen rounded text-white p-2 w-32" :class="open ? 'hidden' : 'block'"
                x-on:click="open = true">READ
                MORE</button>
        </div>

        {{-- back --}}
        <div class="flex flex-col gap-y-4 overflow-hidden transition-all duration-500"
            :class="open ? 'opacity-100' : 'opacity-0'">
            <p class="font-body text-white text-lg md:text-xl xl:text-2xl">
                Curabitur laoreet vehicula dolor quis consectetur. Donec
                et aliquam dolor. Etiam molestie porttitor augue, at
                lobortis metus auctor feugiat. Morbi ut scelerisque
                purus. In ut enim leo. Orci varius natoque penatibus et
                magnis dis parturient montes, nascetur ridiculus mus.
                Duis libero ante, scelerisque id ante in, scelerisque
                iaculis elit. Nulla ornare ex libero, quis eleifend
                purus feugiat sed. Quisque auctor tortor nibh, vitae
                rutrum neque dapibus molestie. Praesent molestie feugiat
                sagittis. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Aliquam condimentum enim sed turpis
                ultrices, sed pretium dolor tincidunt. Pellentesque nec
                porta sapien. Sed sed fringilla mauris, in laoreet nunc.
                Morbi sagittis tortor metus. Morbi porttitor laoreet
                rutrum.
            </p>
            <button class="font-heading bg-growthgreen rounded text-white p-2 w-32" x-on:click="open = false">READ
                LESS</button>
        </div>
    </div>
</article>
