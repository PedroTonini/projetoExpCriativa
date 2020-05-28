<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Funcionario;
use App\Models\Cargo;
use Carbon\Carbon;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $funcionarios = Funcionario::getFuncionarios();
        $variables = [
            'funcionarios' => $funcionarios
        ];
        return view('admin.funcionarios.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::get();

        $variables = [
            'cargos' => $cargos
        ];
        return view('admin.funcionarios.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Procura se cadastro de usuário já existe
        $user = User::withTrashed()->where('cpf', $request->cpf)->first();

        // Criando registro de usuário
        $novoUser = new User();
        if($user != null) {
           $novoUser = $user;
           $novoUser->deleted_at = null;
           $novoFuncionario = Funcionario::withTrashed()->where('user_id', $user->id)->first();
        //    dd($novoFuncionario);
           $novoFuncionario->deleted_at = null;
        }

        $novoUser->name = $request->nome;
        $novoUser->email = $request->email;
        $novoUser->password = bcrypt($request->password);
        $novoUser->cpf = $request->cpf;
        $novoUser->dataNascimento = $request->dataNascimento;
        $novoUser->telefone = $request->telefone;
        $novoUser->tipo = 2;
        $novoUser->save();
        
        // Criando registro de funcionário
        if (!isset($novoFuncionario)) {
            $novoFuncionario = new Funcionario();
        }
        $novoFuncionario->user_id = User::where('cpf', '=', $novoUser->cpf)->first()->id;
        $novoFuncionario->cargo_id = $request->cargo;
        $novoFuncionario->dataAdmissao = Carbon::now()->format('Y-m-d');
        $novoFuncionario->save();
        
       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $func = Funcionario::find($id)->getFuncionario();

        $variables = [
            'func' => $func,
        ];
        return view('admin.funcionarios.show')->with($variables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $func = Funcionario::find($id)->getFuncionario();
        $cargos = Cargo::get();

        $variables = [
            'func' => $func,
            'cargos' => $cargos
        ];
        return view('admin.funcionarios.edit')->with($variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Encontrando registro de funcionário
        $func = Funcionario::find($id);

        // Editando registro de usuário
        $user = User::find($func->user_id);
        $user->name = $request->nome;
        $user->email = $request->email;
        
        $user->cpf = $request->cpf;
        $user->dataNascimento = $request->dataNascimento;
        $user->telefone = $request->telefone;
        $user->tipo = 2;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        
        // Editando registro de funcionário
        $func->cargo_id = $request->cargo;
        $func->dataAdmissao = $request->dataAdmissao;
        $func->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Funcionario::find($id)->user_id;
        Funcionario::where('id', $id)->delete();
        User::where('id', $user_id)->delete();
        return $this->index();
    }
}
