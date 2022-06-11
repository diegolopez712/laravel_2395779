@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Categorías</h3>
         <br>
          <a href="{{ url('/categoria/crear') }}" title="Crear"  class="btn btn-primary">
              Crear
          </a>
        </div>
        <div class="row">
            <form name="frmRegistrar" method="POST" action="{{ url('/categoria/actualizar',$categoria->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" />
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" id="descripcion" name="descripcion"  value="{{ $categoria->descripcion }}" />
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
</div>
@endsection