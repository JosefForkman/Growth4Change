<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('/')}}">welcome</a></li>
            </ul>
        </nav>
    </header>
    <main>
    @foreach($sponsors as $sponsor)
        <img src="{{$sponsor->getFirstMediaUrl()}}"/>
        <h2><a href="{{$sponsor->link}}" target="_blank">{{$sponsor->name}}</a></h2>
        {!! $sponsor->description !!}
    @endforeach

    </main>
</body>
</html>
