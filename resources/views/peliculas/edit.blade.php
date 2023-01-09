
@extends('layouts.app'){{-- heredamos de la plantilla principal de la aplicacion --}}

@section('titulo', 'Editar pelicula: '. $pelicula->nombre){{-- Aqui se va a mostrar el contenido de la vista que extienda de esta plantilla --}}

@section('content') {{-- Aqui se va a mostrar el contenido de la vista que extienda de esta plantilla --}}

    <form action="{{ route('pelicula.update', $pelicula)}}" method="post"> {{-- Esto es para que nos envie el formulario a la ruta pelicula.store --}}

      @csrf {{-- Esto es para que no nos de error al enviar el formulario y guardar la informacion --}}
      @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre pelicula</label>
            <input type="text" class="form-control" name="nombre" value="{{ $pelicula->nombre}}" >
        </div>
        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" class="form-control" name="imagen" value="{{ $pelicula->imagen}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{ $pelicula->descripcion}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer" value="{{ $pelicula->trailer}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection{{-- Aqui se va a mostrar el contenido de la vista que extienda de esta plantilla --}}
