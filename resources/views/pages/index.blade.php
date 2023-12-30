@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>
{{--    @dd($html[0])--}}
    @foreach($html as $content)
        @if($content['type'] === 'FlipCard')
            @foreach($content['data']['Cards'] as $card)
                <x-slide :cards="$card['data']"></x-slide>
            @endforeach
        @endif
    @endforeach
@stop
