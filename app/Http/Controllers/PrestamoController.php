<?php

namespace App\Http\Controllers;

use App\Prestamo;
use App\Libro;
use App\Estudiante;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    protected $prestamo;
    public function __construct(Prestamo $prestamo)
    {
        $this->prestamo = $prestamo;
    }   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Préstamos';
        $slug = 'prestamos';
        $encabezados= ['ID', 'Prestado por', 'Libro', 'Fecha'];
        $data = Prestamo::orderBy('id', 'DESC')->paginate(1000);
        return view('prestamo.index', compact('data','panel', 'encabezados', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'prestamos';
        $nameForm = 'Registrar Préstamo';
        $estudiante = Estudiante::all();
        $libro = Libro::all();
        return view('prestamo.create', compact('slug', 'nameForm', 'estudiante', 'libro'));
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
            'estudiante_id' => 'required',
            'libro_id' => 'required',
            'comentario' => '',
        ]);

        // Comprobando existencia del libro
        $libro = Libro::find($request->libro_id);
        if ($libro) {
            // Actualizando campo estado del libro
            $libro->fill(['estado' => 'Prestado'])->update();
        }

        $prestamo = new Prestamo($request->all());
        $prestamo->save();
        return redirect('/prestamos/create')->with('success', 'El pŕestamo se ha sido registrado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
        $panel = 'Preśtamo';
        $slug = 'prestamos';
        $result = $prestamo;
        return view('prestamo.show', compact('result','panel', 'slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
        $slug = 'prestamos';
        $nameForm = 'Actualizar Préstamo';
        $estudiante = Estudiante::all();
        $libro = Libro::all();
        $data = $prestamo;
        return view('prestamo.edit', compact('slug', 'nameForm', 'estudiante', 'libro', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $prestamo = Prestamo::find($id);
        if ($prestamo) {
            
            // Validando data            
            $request->validate([
                'estudiante_id' => 'required',
                'libro_id' => 'required',
                'comentario' => '',
            ]);

            $prestamo->update($request->all());

            return redirect('/prestamos'.'/'.$id)->with('success', 'El préstamo se ha sido modificado correctamente!.');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
        $data = $prestamo;
        $data->delete();
        return redirect('/prestamos')->with('success', 'El registro se ha sido eliminado correctamente!.');
    }
}
