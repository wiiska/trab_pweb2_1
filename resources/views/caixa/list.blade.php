@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Caixas')

<h3>Listagem de Caixas</h3>

<form action="{{ route('caixa.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome da caixa</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-secondary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('caixa/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Conteudo</th>
            <th>Preço</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->conteudo }}</td>
                <td>{{ $item->preco }}</td>
                <td><a href="{{ route('caixa.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('caixa.destroy', $item) }}" method="post">
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
