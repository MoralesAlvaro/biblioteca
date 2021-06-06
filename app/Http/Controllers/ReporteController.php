<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use PDF;

class ReporteController extends Controller
{
    //
    public function index()
    {
        $panel = "Reporte General";
        $encabezados= ['ID', 'Prestado por', 'Libro', 'Prestado'];
        $data = Prestamo::orderBy('id', 'DESC')->get();
        return view('reportes.general', compact('panel', 'encabezados', 'data'));
    }

    public function exportarGeneral(Type $var = null)
    {
        $panel = "Reporte General";
        $encabezados= ['ID', 'Prestado por', 'Libro', 'Prestado'];
        $data = Prestamo::orderBy('id', 'DESC')->get();
        $pdf = PDF::loadView('reportes.pruebaparapdf', compact('panel', 'encabezados', 'data'));
        return $pdf->download('Reporte General.pdf');
    }
}
