<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Listar los datos
    {
        $categorias = Categoria::all(); //Obtener todas las categorías
        return view('categoria.index')
        ->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//Desplegar la vista para registrar
    {
        return view('categoria/registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Método para insertar en la tabla
    {
        //Llevar los valores de las campos del formulario a un modelo
        $categoria = new Categoria([
        'nombre' => $request->get('nombre'),
        'descripcion' => $request->get('descripcion')
        ]);
    
        $categoria->save(); //Guarda en la tabla de la base de datos.
        return redirect('/categoria')
        ->with('success','El producto ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Visualizar la vista editar
         //Consultar por un id con eloquent
        $categoria = Categoria::findOrFail($id);
        return view('categoria/editar',compact('categoria')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Buscar el registro a editar
        $categoria = Categoria::findOrFail($id); //Consultar el registro a editar

        //Actualizar los datos en el modelo
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        //Actualizar en la  base de datos.
        $categoria->update();

        //Redirigir hacia el método index del controlador(Listar)
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
         //Borrar físicamente el registro
         $categoria->delete();
         return redirect('/categoria');
    }
}
