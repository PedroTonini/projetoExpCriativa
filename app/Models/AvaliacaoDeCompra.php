<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\User;

class AvaliacaoDeCompra extends Model
{
    public function getName(){
        $user_id = Cliente::find($this->cliente_id)->user_id;
        $nome = User::find($user_id)->name;
        return $nome;
    }
}
