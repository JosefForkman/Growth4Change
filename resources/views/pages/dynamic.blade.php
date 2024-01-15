@extends('layouts.default')

@section('content')
    <p class='font-body text-2xl'>This is the {{$page}} page</p>
    <x-TextContiner></x-TextContiner>
    <livewire:Changemaker />
@stop
