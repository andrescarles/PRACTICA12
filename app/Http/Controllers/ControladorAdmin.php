<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function clientes(){
        return view('cliente') -> with (['text' => 'clientes' ]);
    }
    public function facturacion(){
        return view('facturacion') -> with (['text' => 'facturacion' ]);
    }
    public function contabilidad(){
        return view('contabilidad') -> with (['text' => 'contabilidad' ]);
    }
}
