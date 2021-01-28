<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $panel = 'Usuarios';
        $slug = 'usuarios';
        $encabezados= ['ID', 'Nombre', 'Apellido', 'Correo'];
        $campos= ['id', 'name', 'lastName', 'email',];
        $data = User::orderBy('id', 'DESC')->paginate(1000);
        return view('usuario.index', compact('data','panel', 'encabezados', 'campos', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slug = 'usuarios';
        $nameForm = 'Registrar Usuario';
        return view('usuario.create', compact('slug', 'nameForm'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => '',
        ]);

        
        $user = new User([
            'name' => $request->get('name'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'photo' => '',
        ]);

        $user->save();
            
        // IMG
        if ($request->file('photo')) {
            // Ruta de guardado
            $pathImgUrl = Storage::disk('public')->put('img/usuarios', $request->file('photo'));
            // Actualizando ruta img
            $user->fill(['photo' => asset($pathImgUrl)])->save();
        }
        
        return redirect('/usuarios/create')->with('success', 'El usuario se ha registrado correctamente!.');
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
        $slug = 'usuarios';
        $result = User::findOrFail($id);
        return view('usuario.show', compact('result', 'slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slug = 'usuarios';
        $nameForm = 'Actualizar Usuario';       
        $data = User::find($id);
        return view('/usuario.edit', compact('slug', 'nameForm', 'data'));
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
        //
        $usuario = User::find($id);
        if ($usuario) {
            
            // Validando data
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'photo' => '',
            ]);

            // IMG
            // Subiendo imangen
            if ($request->file('photo') ) {
                // Ruta de guardado
                $pathImgUrl = Storage::disk('public')->put('img/usuarios', $request->file('photo'));
                // Eliminando imagen actual
                if ($usuario->photo != "http://127.0.0.1:8000/img/user.png") {
                    $reemplazo = str_replace( "http://127.0.0.1:8000/", "", $usuario->photo );
                    unlink($reemplazo);
                }
                // actualiznado campo
                $usuario->fill(['photo' => asset($pathImgUrl)])->update();
            }else{
                $pathImgUrl = $usuario->photo;
                // actualiznado campo
                $usuario->fill(['photo' => asset($pathImgUrl)])->update();
            }
            
            // Verificando si ha habido modificaciones
            $campos = ['name', 'lastName', 'email'];
            foreach ($campos as $item) {
                // Valor traido de la bd
                $valor_campo_old = $usuario->$item;
                // Valor traido del formulario
                $valor_campo_new = $request->get($item);
                if ($valor_campo_new != $valor_campo_old) {
                    // Actualizando campo
                    $usuario->fill([$item => $valor_campo_new])->save();
                }
            }

            return redirect('/usuarios'.'/'.$id)->with('success', 'El usuario se ha sido actualizado correctamente!.');      
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = User::find($id);
        $data->delete();
        return redirect('/usuarios')->with('success', 'El registro se ha sido eliminado correctamente!.'); 
    }
}
