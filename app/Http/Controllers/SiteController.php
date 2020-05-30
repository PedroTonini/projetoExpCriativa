<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Promocao;
use App\Models\AvaliacaoDeCompra;

class SiteController extends Controller
{
    public function index(){
        Auth::logout();
        return view('index');
    }

    public function avaliacaoCliente(){
        $avaliacao = new AvaliacaoDeCompra();

        $avaliacao->opiAtendimento = request('opiAtendimento');
        $avaliacao->opiPreco = request('opiPreco');
        $avaliacao->opiMarca = request('opiMarca');
        $avaliacao->opiProduto = request('opiProduto');
        $avaliacao->compra_id = request('compra_id');
        $avaliacao->cliente_id = request('cliente_id');

        $avaliacao->save();

        return view('cliente.obrigado');
    }

    public function homeCliente(){
        return view('cliente.home');
    }
}