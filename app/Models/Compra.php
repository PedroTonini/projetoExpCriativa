<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Compra extends Model
{
    public static function getComprasCliente() {
        $userCPF = Auth::user()->CPF;
        return Compra::where('CPFCliente', '=', $userCPF)
                        ->leftJoin('avaliacao_de_compras AS aval', 'aval.compra_id',  '=', 'compras.id')
                        ->select('compras.*', 'aval.id as aval_id');
    }
}
