<?php

$container = '';

?>

    <!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

<div class={{$container}}>

    <header>
        @include('includes.header')
    </header>

    <div id="main" class='min-h-screen'>
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>

    @filamentScripts
    @vite('resources/js/app.js')

</div>

</body>

</html>
