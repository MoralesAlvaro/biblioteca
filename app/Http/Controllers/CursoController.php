<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Grado';
        $slug = 'cursos';
        $encabezados= ['ID', 'Grado', 'Código'];
        $campos= ['id', 'titulo', 'codigo'];
        $data = Curso::orderBy('id', 'DESC')->paginate('50');
        return view('curso.index', compact('data','panel', 'encabezados', 'campos', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'cursos';
        $nameForm = 'Crear Grado';
        return view('curso.create', compact('slug', 'nameForm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'codigo' => 'required'
        ]);

        $curso = new Curso($request->all());
        $curso->save();
        return redirect('/cursos/create')->with('success', 'El Grado se ha sido guardado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slug = 'cursos';
        $nameForm = 'Actualizar Grado';
        $data = Curso::find($id);
        return view('/curso.edit', compact('slug', 'nameForm', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'codigo' => 'required'
        ]);
        
        $curso = Curso::find($id);
        $curso->update($request->all());
        return redirect('/cursos')->with('success', 'El Grado se ha sido actualizado con éxito!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Curso::find($id);
        $data->delete();
        return redirect('/cursos')->with('success', 'El Grado se ha sido eliminado correctamente!.');
    }
}
