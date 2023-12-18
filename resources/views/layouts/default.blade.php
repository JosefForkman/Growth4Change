<?php

$container = '';
$main = '';

?>

    <!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

<div class={{$container}}>

    <header>
        @include('includes.header')
    </header>

    <div id="main" class={{$main}}>
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>

</body>
