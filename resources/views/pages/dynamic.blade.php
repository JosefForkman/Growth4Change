@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>
    @if($contents)
        @foreach($contents as $content) @endforeach
        @switch($content['type'])
            @case("Text Block")
                <x-TextContiner :title="$content['title']" :texts="$content['texts']" :image="$content['image']" :alt="$content['alt']" :ImageRight="$content['ImageRight']" />
                @break
            @default
                <p>Default values</p>
        @endswitch
    @endif
    <livewire:Changemaker />
{{--    @dd($content)--}}
@stop
