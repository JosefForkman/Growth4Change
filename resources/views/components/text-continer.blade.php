<section class="grid gap-y-4 md:grid-cols-2 md:gap-x-8 md:items-start w-fit mx-auto">
    <!-- Be present above all else. - Naval Ravikant -->
    @if ($image)
        @if($imageRight)
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full mb-4 md:row-span-12 md:col-start-2" />
        @else
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full mb-4 md:row-span-12" />

        @endif
        <h2 class="text-4xl font-heading text-growthgreen">Our manifesto</h2>
    @else
        <h2 class="text-4xl font-heading text-growthgreen col-span-full">Our manifesto</h2>
    @endif


    @foreach ($texts as $text)
        <p class="font-body text-lg max-w-prose">{{ $text }}</p>
    @endforeach
</section>
