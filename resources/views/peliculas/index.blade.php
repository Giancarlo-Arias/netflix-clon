
@extends('layouts.app'){{--heredamos de la plantilla principal de la aplicacion --}}

@section('titulo', 'Lista de peliculas'){{-- Aqui se va a mostrar el contenido de la vista que extienda de esta plantilla --}}

@section('content')
    <a class="btn btn-primary" href="{{ route('pelicula.create')}}" role="button">Crear Pelicula</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
                <tr>
                    <th scope="row">{{ $pelicula->id}}</th>
                    <td>{{ $pelicula->nombre}}</td>
                    <td>{{ $pelicula->descripcion}}</td>
                    <td>{{ $pelicula->imagen}}</td>
                    <td><a class="btn btn-primary" href="{{ route('pelicula.edit', $pelicula->id)}}" role="button">Editar</a></td>
                    {{-- <td><a class="btn btn-danger" href="{{ route('pelicula.destroy', $pelicula->id)}}" role="button">Eliminar</a> --}}
                    <td><a class="btn btn-danger" href="#" onclick="event.preventDefault();
                            document.getElementById('delete-form{{$pelicula->id}}').submit();">Eliminar
                        </a>
                        <form action="{{ route('pelicula.destroy', $pelicula->id)}}" method="POST" id="delete-form{{$pelicula->id}}" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection{{--Aqui se va a mostrar el contenido de la vista que extienda de esta plantilla--}}

