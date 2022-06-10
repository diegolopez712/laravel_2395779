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
            <form name="frmRegistrar" method="POST" action="{{ url('/categoria/guardar') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                </div>
                <input type="text" id="nombre" name="nombre" />
            </form>
        </div>
</div>
@endsection