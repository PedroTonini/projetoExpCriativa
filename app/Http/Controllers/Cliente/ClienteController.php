<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compra;

class ClienteController extends Controller
{
    public function home(){
        $compras = Compra::where('CPFCliente', '=', 64207009493)->get();                
        $variables = [
            'compras' => $compras
        ];
        return view( 'cliente.home')->with($variables);
    }

    public function promocoes(){
        return view('cliente.promocoes');
    }

    public function index(){
        return view('index');
    }
}
