<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AvaliacaoDeCompra;
use Illuminate\Support\Facades\DB;

class AvaliacoesController extends Controller
{
    public function index()
    {
        $avaliacoes = AvaliacaoDeCompra::orderBy('created_at', 'DESC')->get();
        
        return view('admin.avaliacoes.index', compact('avaliacoes'));
    }
    public function show($id)
    {
        $avaliacoes = DB::table('avaliacao_de_compras')->find($id);
        $avaliacao = ['avaliacao'=>$avaliacoes];
    	return view('admin.avaliacoes.show')->with($avaliacao);
    }
}
