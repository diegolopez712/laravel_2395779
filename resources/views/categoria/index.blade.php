@extends('principal')

@section('contenido')
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>
@endsection