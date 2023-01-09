<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()// Muestra todas las peliculas de la base de datos 
    {
        $peliculas = Pelicula::all();

        // return view('peliculas.index',['peliculas' => $peliculas]);
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//Muestra el formulario para crear una nueva pelicula
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)// Guarda la pelicula en la base de datos
    {
        //dd($request->all());
        $pelicula = Pelicula::create(
            $request->all()
        );

        //dd($pelicula);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)// Muestra el formulario para editar una pelicula
    {
        return view('peliculas.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)// Actualiza la pelicula en la base de datos
    {
        //dd($request->all());
        //$pelicula->update($request->all());
        $pelicula = $pelicula->update(
            $request->all()
        );
        return redirect()->route('pelicula.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)// Elimina la pelicula de la base de datos
    {
        $pelicula->delete();
        return back();
    }
}
