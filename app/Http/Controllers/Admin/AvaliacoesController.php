<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AvaliacaoDeCompra;
use App\Models\Cliente;
use App\Models\User;

class AvaliacoesController extends Controller
{
    public function index()
    {
        $avaliacoes = AvaliacaoDeCompra::orderBy('id', 'DESC')->get();
        foreach ($avaliacoes as $avaliacao){
            $avaliacao->nome = $avaliacao->getName();
        }
        return view('admin.avaliacoes.index', compact('avaliacoes'));
    }
    public function show($id)
    {
        $avaliacao = AvaliacaoDeCompra::find($id);
        $avaliacao->nome = $avaliacao->getName();

        $variables = ['avaliacao'=>$avaliacao];
    	return view('admin.avaliacoes.show')->with($variables);
    }

    public function dashboard() 
    {
        
        return view('admin.avaliacoes.dashboard');
    }
}
