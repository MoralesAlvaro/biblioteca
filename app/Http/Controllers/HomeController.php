<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Libro;
use App\User;
use App\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $libro = Libro::all()->count();        
        $prestamos = Prestamo::all()->count();
        $usuarios = User::all()->count();
        $categorias = Categoria::all()->count();

        return view('home', compact('libro', 'prestamos', 'usuarios', 'categorias'));
    }
}
