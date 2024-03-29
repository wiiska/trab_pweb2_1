@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Skins')
@php
    if (!empty($dado->id)) {
        $route = route('skin.update', $dado->id);
    } else {
        $route = route('skin.store');
    }
@endphp

<h3>Formulário de Skins</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Raridade</label><br>
    <input type="text" name="raridade" class="form-control"
        value="@if (!empty($dado->raridade)) {{ $dado->raridade }}@elseif (!empty(old('raridade'))){{ old('raridade') }}@else{{ '' }} @endif"><br>

    <label for="">Cor</label><br>
    <input type="text" name="cor" class="form-control"
        value="@if (!empty($dado->cor)) {{ $dado->cor }}@elseif (!empty(old('cor'))){{ old('cor') }}@else{{ '' }} @endif"><br>

    <label for="">Float</label><br>
    <input type="text" name="float" class="form-control"
        value="@if (!empty($dado->float)) {{ $dado->float }}@elseif (!empty(old('float'))){{ old('float') }}@else{{ '' }} @endif"><br>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('skin') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
