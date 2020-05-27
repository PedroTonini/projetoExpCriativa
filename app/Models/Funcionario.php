<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Funcionario extends Model
{
    public static function getFuncionarios() {
        return DB::table('funcionarios')
                            ->join('users', 'funcionarios.user_id', '=', 'users.id')
                            ->rightJoin('cargos', 'funcionarios.cargo_id', '=', 'cargos.id')
                            ->select('funcionarios.*', 'users.name', 'users.email', 'users.cpf',
                             'users.dataNascimento', 'users.telefone', 'cargos.nome AS cargo', 'cargos.salario')
                            ->get();
    }

    public function getFuncionario() {
        return $this->join('users', 'funcionarios.user_id', '=', 'users.id')
                    ->where('funcionarios.user_id', '=', $this->user_id)
                    ->rightJoin('cargos', 'funcionarios.cargo_id', '=', 'cargos.id')
                    ->where('funcionarios.cargo_id', '=', $this->cargo_id)
                    ->select('funcionarios.*', 'users.name', 'users.email', 'users.password', 'users.cpf',
                    'users.dataNascimento', 'users.telefone', 'cargos.nome AS cargo', 'cargos.salario')
                    ->first();
    }
}
