<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

<div id='container'>

    <header>
        @include('includes.header')
    </header>

    <div id='main' class='min-h-screen w-full p-4 md:px-12 md:py-4 xl:px-16 xl:py-6'>
        @yield('content')
    </div>

    @include('includes.footer')

    @filamentScripts
    @vite('resources/js/app.js')
</div>

</body>

</html>
