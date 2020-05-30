<?php

namespace App\Http\Controllers\Funcionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao_Func;
use App\Models\Funcionario;

class FuncinarioController extends Controller
{
    public function minhasAvaliacoes(){
        return view('funcionario.avaliacoes.minhasAvaliacoes');
    }
}
