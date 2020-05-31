<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\User;

class ClienteController extends Controller
{
    public function auth() {
        if ( !Auth::user()->hasRole('cliente') ) {
            Auth::logout();
        }
        return redirect('/cliente/home');
    }

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

    public function cadastro() {
        return view('cliente.cadastrar');
    }

    public function store(Request $request) {
         // Procura se cadastro de usuário já existe
         $user = User::withTrashed()->where('cpf', $request->cpf)->first();

         // Criando registro de usuário
        $novoUser = new User();
        if($user != null) {
           $novoUser = $user;
           $novoUser->deleted_at = null;
        }

        $novoUser->name = $request->name;
        $novoUser->email = $request->email;
        $novoUser->password = bcrypt($request->password);
        $novoUser->cpf = $request->cpf;
        $novoUser->dataNascimento = $request->dataNascimento;
        $novoUser->telefone = $request->telefone;
        $novoUser->save();
        $user = User::where('cpf', '=', $novoUser->cpf)->first();
        $user->attachRole(3);

        return redirect('cliente/home');
    }

    public function avaliar(){
        return view('cliente.avaliar');
    }
}
