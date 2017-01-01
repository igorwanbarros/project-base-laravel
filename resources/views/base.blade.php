@extends('templates.admin-lte.base')

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
    layout-top-nav
@stop

@section('template-content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    @include('templates.admin-lte.scripts')
    <script src="{{url('assets/base-laravel/base-laravel.js')}}"></script>
    <script src="{{url('assets/base-laravel/toastr/toastr.js')}}"></script>
    <script src="{{url('assets/application.js')}}"></script>
    {!! toastr()->message() !!}
    {!! app('assets')->renderScripts() !!}
@stop
