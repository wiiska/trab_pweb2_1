@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Caixas')
@php
    if (!empty($dado->id)) {
        $route = route('caixa.update', $dado->id);
    } else {
        $route = route('caixa.store');
    }
@endphp

<h3>Formulário de Caixas</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome da caixa</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Conteudo da caixa</label><br>
    <input type="text" name="conteudo" class="form-control"
        value="@if (!empty($dado->conteudo)) {{ $dado->conteudo }}@elseif (!empty(old('conteudo'))){{ old('conteudo') }}@else{{ '' }} @endif"><br>

    <label for="">Preço</label><br>
    <input type="text" name="preco" class="form-control"
        value="@if (!empty($dado->preco)) {{ $dado->preco }}@elseif (!empty(old('preco'))){{ old('preco') }}@else{{ '' }} @endif"><br>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('caixa') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
