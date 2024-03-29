@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Pedidos')
@php
    if (!empty($dado->id)) {
        $route = route('pedido.update', $dado->id);
    } else {
        $route = route('pedido.store');
    }
@endphp

<h3>Formulário de Pedidos</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Cliente</label><br>
    <input type="text" name="cliente" class="form-control"
        value="@if (!empty($dado->cliente)) {{ $dado->cliente }}@elseif (!empty(old('cliente'))){{ old('cliente') }}@else{{ '' }} @endif"><br>

    <label for="">Quantidade</label><br>
    <input type="text" name="quantidade" class="form-control"
        value="@if (!empty($dado->quantidade)) {{ $dado->quantidade }}@elseif (!empty(old('quantidade'))){{ old('quantidade') }}@else{{ '' }} @endif"><br>

    <label for="">Contato</label><br>
    <input type="text" name="contato" class="form-control"
        value="@if (!empty($dado->contato)) {{ $dado->contato }}@elseif (!empty(old('contato'))){{ old('contato') }}@else{{ '' }} @endif"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('pedido') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
