@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{ $page }} page</p>
    @foreach ($contents as $content)
        @switch($content['type'])
            @case('Text Block')
                @php($texts = array_map(function ($text) {
                    return $text["Description"];
                }, $content['data']['Description']));

                <x-TextContiner :title='$content["data"]["Heading"]' :texts='$texts'></x-TextContiner>
                @break

            @default
                <livewire:Changemaker />
                <p class='font-body text-2xl'>{{ $content['content'] }}</p>
        @endswitch
    @endforeach
@stop
