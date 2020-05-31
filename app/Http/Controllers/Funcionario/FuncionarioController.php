<?php

namespace App\Http\Controllers\Funcionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao_Func;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index() {
    return view('funcionario.index');
    }

    public function minhasAvaliacoes(){
        return view('funcionario.avaliacoes.minhasAvaliacoes');
    }
}
