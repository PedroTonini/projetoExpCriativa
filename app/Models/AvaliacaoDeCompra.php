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

    public static function countAval() {
        $avalProdBoas = AvaliacaoDeCompra::where('opiProduto', '>', '3')->count();
        $avalProdRuins = AvaliacaoDeCompra::where('opiProduto', '<', '3')->count();
        $avalAtendBoas = AvaliacaoDeCompra::where('opiAtendimento', '>', '3')->count();
        $avalAtendRuins = AvaliacaoDeCompra::where('opiAtendimento', '<', '3')->count();

        $data = [
            'avalProdBoas'      => $avalProdBoas,
            'avalProdRuins'     => $avalProdRuins,
            'avalAtendBoas'     => $avalAtendBoas,
            'avalAtendRuins'    => $avalAtendRuins
        ];
        return $data;
    }
}
