@extends('base')
@section('conteudo')
@section('titulo', 'Página Inícial')


<img src="{{ asset('images/loja.png') }}" style="width:200px;height:200px;">
<center><h1 style="margin-top: -140px">Skin Masters</h1></center>

<div class="row g-1">
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="{{ asset('images/pedido.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="{{url("pedido")}}" class="btn btn-outline-secondary">Realizar pedido</a><br>
        </div>
    </div>
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="{{ asset('images/skin.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="{{url("skin")}}" class="btn btn-outline-secondary">Cadastrar skin</a><br>
        </div>
    </div>
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="{{ asset('images/caixa.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="{{url("caixa")}}" class="btn btn-outline-secondary">Cadastrar caixa</a><br>
        </div>
    </div>
</div>
@stop