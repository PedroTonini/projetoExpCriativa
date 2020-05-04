<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocao;
use App\Models\AvaliacaoDeCompra;

class SiteController extends Controller
{
    public function index(){
        return view('cliente.avaliar');
    }

    public function avaliacaoCliente(){
        $avaliacao = new AvaliacaoDeCompra();

        // dd($avaliacao);

        $avaliacao->opiAtendimento = request('opiAtendimento');
        $avaliacao->opiPreco = request('opiPreco');
        $avaliacao->opiMarca = request('opiMarca');
        $avaliacao->opiProduto = request('opiProduto');
        $avaliacao->compra_id = request('compra_id');
        $avaliacao->cliente_id = request('cliente_id');

        $avaliacao->save();

        return view('cliente.obrigado');
    }

}