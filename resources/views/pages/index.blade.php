@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>
    <x-TextContiner :imageRight="false"></x-TextContiner>
    <livewire:sponsor />
@stop
