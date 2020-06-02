<?php

namespace App\Http\Controllers\Funcionario;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avaliacao_Func;
use App\Models\Funcionario;
use App\Models\User;

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
        $userId = Auth::id();
        $aux = Funcionario::where('user_id', '=', $userId)->first();            
        $avaliacoes = Avaliacao_Func::where('funcionario_id', '=', $aux->id)->get();
        $variables = [

            'avaliacoes' => $avaliacoes
        ];
        return view('funcionario.avaliacoes.minhasAvaliacoes')->with($variables);
    }

    public function pagAvaliacao($id){
        $variables = [
            'func_id'=> $id
        ];
        return view('funcionario.avaliacoes.avaliar')->with($variables);
    }

    public function avaliar()
    {
        $userId = Auth::id();        
        $funcionarios = Funcionario::where('user_id', '!=', $userId)->get();
        $funcs = [];
        foreach($funcionarios as $func){
            array_push($funcs, $func->getFuncionario());
        }
        $variables = [
            'funcionarios' => $funcs,
        ];
        return view('funcionario.avaliacoes.funcionarioLista')->with($variables);
    }

    public function avaliacaoFuncionario($id){
        $avaliacao = new Avaliacao_Func();        

        $avaliacao->opiEntrosamento = request('opiEntrosamento');
        $avaliacao->opiTexto = request('opiTexto');
        $avaliacao->funcionario_id = $id;

        $avaliacao->save();

        return $this->avaliar();
    }

    public function show($id)
    {        
        $avaliacao = Avaliacao_Func::find($id);
        $avaliacao->funcionario_id = $avaliacao->getId();

        $variables = ['ava'=>$avaliacao];
    	return view('funcionario.avaliacoes.detalhamento')->with($variables);
    }
}
