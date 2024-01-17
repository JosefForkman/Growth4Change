@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>

    @foreach($contents as $content)
        @switch($content['type'])
            @case("Text Block")
                <x-TextContiner :title="$content['title']" :texts="$content['texts']" :image="$content['image']"
                                :alt="$content['alt']" :ImageRight="$content['ImageRight']" />
                @break
            @case("Changemakers")
                <livewire:Changemaker />
                @break
            @default
                <p>Default values</p>
        @endswitch
    @endforeach
@stop
