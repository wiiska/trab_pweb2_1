@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Skins')

<h3>Listagem de Skins</h3>

<form action="{{ route('skin.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Raridade</label><br>
            <input type="text" name="raridade" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-secondary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('skin/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Raridade</th>
            <th>Cor</th>
            <th>Float</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->raridade }}</td>
                <td>{{ $item->cor }}</td>
                <td>{{ $item->float }}</td>
                <td><a href="{{ route('skin.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('skin.destroy', $item) }}" method="post">
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