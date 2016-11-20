@extends('templates.admin-lte.app')

@section('styles')
    @include('templates.admin-lte.styles')
    <link rel="stylesheet" type="text/css" href="{{url('assets/base-laravel/base-laravel.css')}}">
    <link rel="stylesheet" href="{{url('assets/base-laravel/toastr/toastr.min.css')}}">
@stop

@section('body-class')
    hold-transition skin-red sidebar-mini sidebar-collapse
@stop

@section('sidebar')
    {!! app('menu') !!}
@stop

@section('scripts')
    @include('templates.admin-lte.scripts')
    <script src="{{url('assets/base-laravel/base-laravel.js')}}"></script>
    <script src="{{url('assets/base-laravel/toastr/toastr.js')}}"></script>
    {!! toastr()->message() !!}
@stop
