<nav class='flex flex-col'>
    <ul class='flex flex-col sm:flex-row sm:justify-end sm:items-center gap-x-2 md:gap-x-3 lg:gap-x-6 xl:gap-x-12 2xl:gap-x-16 content-center'>

     <li class='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><a href='/'>{{ $homePage->name }}</a></li>

            @foreach ($pages as $page)

            <li class='text-white font-heading justify-self-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl'><a href={{ route('page', $page->slug) }}>{{ $page->name }}</a></li>

            @endforeach

    </ul>
</nav>
