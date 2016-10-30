@extends('app')
@section('content')

    {!! $widget !!}

    <div class="ui equal width grid">
        <div class="column">
            <a href="{!! url($urlBase) !!}" class="ui animated button">
                <div class="hidden content">Voltar</div>
                <div class="visible content"><i class="chevron left icon"></i></div>
            </a>
        </div>
        <div class="column right aligned">
            <a href="{!! url($urlBase . '/novo') !!}"
               class="ui floated black vertical animated button {!! $btnAddAjax ? 'link-modal-ajax' : '' !!}"
               data-modal-title="Novo">
                <div class="hidden content">Novo</div>
                <div class="visible content"><i class="plus icon"></i></div>
            </a>
        @if ($model->id)
            <a href="{!! url($urlBase . '/excluir/' . $model->id) !!}" class="ui vertical red animated button">
                <div class="hidden content">Excluir</div>
                <div class="visible content"><i class="trash icon"></i></div>
            </a>
        @endif
        </div>
    </div>
@stop
