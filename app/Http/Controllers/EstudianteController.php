<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Estudiantes';
        $slug = 'estudiantes';
        $encabezados= ['ID', 'Código', 'Nombre', 'Apellido'];
        $campos= ['id', 'codigo_estudiante', 'nombre', 'apellido'];
        $data = Estudiante::orderBy('id', 'DESC')->paginate('50');
        return view('estudiante.index', compact('data','panel', 'encabezados', 'campos', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'estudiantes';
        $nameForm = 'Registrar Estudiante';
        $curso = Curso::all();
        return view('estudiante.create', compact('slug', 'nameForm', 'curso'));
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
            'codigo_estudiante' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'foto' => '',
            'curso_id' => 'required',
        ]);


        $estudiante = new Estudiante($request->all());
        $estudiante->save();

        // IMG
        if ($request->file('foto')) {
            // Ruta de guardado
            $pathImgUrl = Storage::disk('public')->put('img/estudiantes', $request->file('foto'));
            // Actualizando ruta img
            $estudiante->fill(['foto' => asset($pathImgUrl)])->save();
        }

        return redirect('/estudiantes/create')->with('success', 'El estudiante se ha sido registrado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slug = 'estudiantes';
        $result = Estudiante::findOrFail($id);
        return view('estudiante.show', compact('result', 'slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slug = 'estudiantes';
        $nameForm = 'Actualizar Estudiante';
        $curso = Curso::all();        
        $data = Estudiante::find($id);
        return view('/estudiante.edit', compact('slug', 'nameForm', 'data', 'curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estudiante = Estudiante::find($id);
        if ($estudiante) {
            
            // Validando data
            $request->validate([
                'codigo_estudiante' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'foto' => '',
                'curso_id' => 'required',
            ]);

            // IMG
            // Subiendo imangen
            if ($request->file('foto') ) {
                // Ruta de guardado
                $pathImgUrl = Storage::disk('public')->put('img/estudiantes', $request->file('foto'));
                // Eliminando imagen actual
                if ($estudiante->foto != "http://127.0.0.1:8000/img/user.png") {
                    $reemplazo = str_replace( "http://127.0.0.1:8000/", "", $estudiante->foto );
                    unlink($reemplazo);
                }
                // actualiznado campo
                $estudiante->fill(['foto' => asset($pathImgUrl)])->update();
            }else{
                $pathImgUrl = $estudiante->foto;
                // actualiznado campo
                $estudiante->fill(['foto' => asset($pathImgUrl)])->update();
            }

            // Verificando si ha habido modificaciones
            $campos = ['codigo_estudiante', 'nombre', 'apellido', 'cusro_id'];
            foreach ($campos as $item) {
                // Valor traido de la bd
                $valor_campo_old = $estudiante->$item;
                // Valor traido del formulario
                $valor_campo_new = $request->get($item);
                if ($valor_campo_new != $valor_campo_old) {
                    // Actualizando campo
                    $estudiante->fill([$item => $valor_campo_new])->save();
                }
            }

            return redirect('/estudiantes'.'/'.$id)->with('success', 'El estudiante se ha sido registrado correctamente!.');      
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Estudiante::find($id);
        $data->delete();
        return redirect('/estudiantes')->with('success', 'El registro se ha sido eliminado correctamente!.');    
    }
}
