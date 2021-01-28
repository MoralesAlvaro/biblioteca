<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel= 'Categorías';
        $slug = 'categorias';
        $encabezados= ['ID', 'Nombre'];
        $campos= ['id', 'nombre'];
        $data = Categoria::orderBy('id', 'DESC')->paginate('50');
        return view('categoria.index', compact('data','panel', 'encabezados', 'campos', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'categorias';
        $nameForm = 'Crear Categoría';
        return view('categoria.create', compact('slug', 'nameForm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $categoria = new Categoria($request->all());
        $categoria->save();
        return redirect('/categorias/create')->with('success', 'La Categoría se ha sido guardado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slug = 'categorias';
        $nameForm = 'Actualizar Categoría';
        $data = Categoria::find($id);
        return view('categoria.edit', compact('slug', 'nameForm', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre' => 'required'
        ]);
        
        $categoria = Categoria::find($id);
        $categoria->update($request->all());
        return redirect('/categorias')->with('success', 'La Categoría se ha sido actualizado con éxito!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Categoria::find($id);
        $data->delete();
        return redirect('/categorias')->with('success', 'La Categoría se ha sido eliminado correctamente!.');
    }
}

