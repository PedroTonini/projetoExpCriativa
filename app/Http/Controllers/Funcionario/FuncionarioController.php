<?php

namespace App\Http\Controllers\Funcionario;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao_Func;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function auth() {
        if ( null !== Auth::user() &&  !Auth::user()->hasRole('funcionario') ) {
            Auth::logout();
        }
        return redirect('funcionario/home');
    }

    public function index() {
    return view('funcionario.index');
    }

    public function minhasAvaliacoes(){
        return view('funcionario.avaliacoes.minhasAvaliacoes');
    }

    public function avaliar(){
        return view('funcionario.avaliacoes.avaliar');
    }
}
