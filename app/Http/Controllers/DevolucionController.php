<?php

namespace App\Http\Controllers;

use App\Devolucion;
use App\Libro;
use App\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DevolucionController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Devoluciones';
        $slug = 'devoluciones';
        $encabezados= ['ID', 'Prestado por', 'Libro', 'Fecha'];
        $data = Devolucion::orderBy('id', 'DESC')->paginate(1000);
        return view('devolucion.index', compact('data','panel', 'encabezados', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $libro->estado = '1';
            $libro->update();

            // Eliminando registro de préstamos
            $prestamo = DB::table('prestamos')->where('libro_id', '=', $request->libro_id)->delete();
        }else{
            dd('No se ha realizado la devolución');
        }

        $devolucion = new Devolucion($request->all());
        $devolucion->save();
        return redirect()->back()->with('success', 'La devolución se ha sido registrado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $result = Devolucion::find($id);
        $slug = 'devoluciones';
        return view('devolucion.show', compact('slug', 'result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slug = 'devoluciones';
        $nameForm = 'Actualizar Devolución';
        $estudiante = Estudiante::all();
        $libro = Libro::all();
        $data = Devolucion::find($id);
        return view('devolucion.edit', compact('data', 'slug', 'nameForm', 'estudiante', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'estudiante_id' => 'required',
            'libro_id' => 'required',
            'comentario' => '',
        ]);
        
        $devolucion = Devolucion::find($id);
        $devolucion->update($request->all());
        return redirect('/devoluciones'.'/'.$devolucion->id)->with('success', 'El registro se ha sido modificado correctamente!.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $devolucion = Devolucion::find($id);
        $devolucion->delete();
        return redirect('/devoluciones')->with('success', 'El registro se ha eliminado correctamente.');
    }
}
