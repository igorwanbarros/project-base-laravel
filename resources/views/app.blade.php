@extends('templates.admin-lte.app')

@section('styles')
    @include('templates.admin-lte.styles')
    <link rel="stylesheet" type="text/css" href="{{url('assets/base-laravel/base-laravel.css')}}">
    <link rel="stylesheet" href="{{url('assets/base-laravel/toastr/toastr.min.css')}}">
    {!! app('assets')->renderStyles() !!}
    <style type="text/css">
        .nav-tabs-custom > .nav-tabs > li.active {
            border-top-color: #f33221;
        }

        .form-control:focus {
            border-color: #f33221;
        }
        .list-error span {
            color: #DD4B39;
            font-size: 0.8em;
        }
    </style>
@stop

@section('body-class')
    hold-transition skin-red sidebar-mini sidebar-collapse
@stop

@section('navbar')
    @include('templates.admin-lte.navbar')
@stop

@section('sidebar')
    {!! app('menu') !!}
@stop

@section('footer')
    @include('templates.admin-lte.footer')
@stop

@section('modal')
    @include('templates.admin-lte.modal')
@stop

@section('scripts')
    @include('templates.admin-lte.scripts')
    <script src="{{url('assets/base-laravel/base-laravel.js')}}"></script>
    <script>
        BaseEvents.iCheckPlugin('red');
    </script>
    {!! toastr()->message() !!}
    {!! app('assets')->renderScripts() !!}
@stop
