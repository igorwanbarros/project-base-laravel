@extends('app')
@section('content')

    {!! $widget !!}

    <a href="{!! url($urlBase . '/novo') !!}"
       class="ui right floated black vertical animated button {!! $btnAddAjax ? 'link-modal-ajax' : '' !!}"
       data-modal-title="Novo">
        <div class="hidden content">Novo</div>
        <div class="visible content"><i class="plus icon"></i></div>
    </a>

@stop
