<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Curso;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{

    protected $libro;
    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Libros';
        $slug = 'libros';
        $encabezados= ['ID', 'ISBN', 'Título', 'Autor', 'Editorial', 'Disponibles'];
        $campos= ['id', 'isbn', 'titulo', 'autor', 'editorial'];
        $data = Libro::orderBy('id', 'ASC')->get();
        $data = $data->groupBy('titulo');
        //dd($data);
        return view('libro.index', compact('data','panel', 'encabezados', 'campos', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'libros';
        $nameForm = 'Registrar Libro';
        $curso = Curso::all();
        $categoria = Categoria::all();
        return view('libro.create', compact('slug', 'nameForm', 'curso', 'categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validando data
        $request->validate([
            'isbn' => 'required|unique:libros',
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
            'estado' => 'required',
            'categoria_id' => 'required',
            'curso_id' => 'required',
        ]);

        $libro = new Libro($request->all());
        $libro->save();
        return redirect('/libros/create')->with('success', 'El libro se ha sido registrado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
        $panel = 'Libros';
        $slug = 'libros';
        $result = $libro;
        return view('libro.show', compact('result','panel', 'slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
        $slug = 'libros';
        $nameForm = 'Actualizar Libro';
        $curso = Curso::all();
        $categoria = Categoria::all();
        $data = $libro;
        return view('libro.edit', compact('slug', 'nameForm', 'curso', 'categoria', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $libro = Libro::find($id);
        if ($libro) {
            
            // Validando data
            $request->validate([
                'isbn' => 'required',
                'titulo' => 'required',
                'autor' => 'required',
                'editorial' => 'required',
                'estado' => 'required',
                'categoria_id' => 'required',
                'curso_id' => 'required',
            ]);

            $libro->update($request->all());

            return redirect('/libros'.'/'.$id)->with('success', 'El libro se ha sido modificado correctamente!.');      
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
        $data = $libro;
        $data->delete();
        return redirect('/libros')->with('success', 'El registro se ha sido eliminado correctamente!.');
    }
}
