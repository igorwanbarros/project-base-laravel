@extends('templates.admin-lte.base')

@section('styles')
    @include('templates.admin-lte.styles')
    <style type="text/css">
        body {
            background-color: #E2E7F3 !important;
        }
        .form-control:focus {
            border-color: #367fa9;
        }
        .login-box-body {
            border: 1px solid silver;
            box-shadow: 3px 5px 15px silver;
        }
    </style>
@stop

@section('body-class')
    hold-transition login-page
@stop

@section('template-content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/')}}"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            @yield('content')
        </div>
        <!-- /.login-box-body -->
    </div>
@stop

@section('scripts')
    @include('templates.admin-lte.scripts')
@stop
