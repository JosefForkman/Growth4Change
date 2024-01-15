<section class="bg-growthdarkgrey p-10 pt-6 rounded-2xl">
    <h2 class="text-4xl font-heading text-growthgreen md:text-4xl xl:text-6xl">How we make a difference</h2>
    <div class="overflow-x-auto mt-4 mb-20">
        <div class="flex flex-row gap-14 w-fit">

            @foreach ($cards as $card)
                <x-flip-card :image="$card['image']" :title="$card['title']" :shortDescription="$card['shortDescription']" :extendedDescription="$card['extendedDescription']"/>
            @endforeach

            {{-- <x-flip-card/>
            <x-flip-card/>
            <x-flip-card/>
            <x-flip-card/> --}}
        </div>
    </div>
    <div class="w-fit m-auto flex flex-row items-center gap-4">

        <button class="w-6 h-6 bg-growthlightgrey rounded-full"></button>
        <button class="w-6 h-6 bg-growthlightgrey rounded-full"></button>

        <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                <path d="M22.5188 17.3958L14.0188 25.8958C13.4313 26.4833 12.4813 26.4833 11.9 25.8958L10.4875 24.4833C9.9 23.8958 9.9 22.9458 10.4875 22.3646L16.5125 16.3396L10.4875 10.3146C9.9 9.72708 9.9 8.77708 10.4875 8.19583L11.8937 6.77083C12.4812 6.18333 13.4312 6.18333 14.0125 6.77083L22.5125 15.2708C23.1062 15.8583 23.1062 16.8083 22.5188 17.3958Z" fill="#5FA331"/>
            </svg>
        </button>
    </div>
</section>
