@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Pedidos')

<h3>Listagem de Pedidos</h3>

<form action="{{ route('pedido.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome do cliente</label><br>
            <input type="text" name="cliente" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-secondary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('pedido/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Quantidade</th>
            <th>Contato</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->cliente }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>{{ $item->contato }}</td>
                <td><a href="{{ route('pedido.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('pedido.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
