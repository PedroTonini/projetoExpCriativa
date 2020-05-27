<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compra;

class ClienteController extends Controller
{
    public function index(){
        $compras = Compra::where('CPFCliente', '=', 64207009493)->get();                
        $variables = [
            'compras' => $compras
        ];
        return view( 'cliente.home')->with($variables);
    }
}
