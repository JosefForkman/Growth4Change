@extends('layouts.default')

@section('content')
    <p>{{env("APP_URL", "somedefaultvalue")}}</p>
    <p class='font-body text-2xl'>This is the {{$page}} page</p>

@stop
