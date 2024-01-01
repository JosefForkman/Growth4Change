@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>
    @foreach($html as $content)
        @if($content['type'] === 'FlipCard')
            <x-slide :cards="$content['data']['Cards']" :title="$content['data']['Heading']"></x-slide>
        @endif
    @endforeach
@stop
