<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\User;

class AvaliacaoDeCompra extends Model
{
    public function getName(){
        $nome = User::find($this->user_id)->name;
        return $nome;
    }

    public static function countAval() {
        $avalProdBoas = AvaliacaoDeCompra::where('opiProduto', '>', '3')->count();
        $avalProdRuins = AvaliacaoDeCompra::where('opiProduto', '<', '3')->count();
        $avalAtendBoas = AvaliacaoDeCompra::where('opiAtendimento', '>', '3')->count();
        $avalAtendRuins = AvaliacaoDeCompra::where('opiAtendimento', '<', '3')->count();
        $avalPrecoBoas = AvaliacaoDeCompra::where('opiPreco', '>', '3')->count();
        $avalPrecoRuins = AvaliacaoDeCompra::where('opiPreco', '<', '3')->count();
        $avalMarcasBoas = AvaliacaoDeCompra::where('opiMarca', '>', '3')->count();
        $avalMarcasRuins = AvaliacaoDeCompra::where('opiMarca', '<', '3')->count();

        // Calcula a média geral de avaliações de compra
        $avgAval = AvaliacaoDeCompra::avg('opiAtendimento');
        $avgAval += AvaliacaoDeCompra::avg('opiPreco');
        $avgAval += AvaliacaoDeCompra::avg('opiMarca');
        $avgAval += AvaliacaoDeCompra::avg('opiProduto');
        $avgAval = $avgAval / 4;

        $data = [
            'avalProdBoas'      => $avalProdBoas,
            'avalProdRuins'     => $avalProdRuins,
            'avalAtendBoas'     => $avalAtendBoas,
            'avalAtendRuins'    => $avalAtendRuins,
            'avalPrecoBoas'     => $avalPrecoBoas,
            'avalPrecoRuins'    => $avalPrecoRuins,
            'avalMarcasBoas'    => $avalMarcasBoas,
            'avalMarcasRuins'   => $avalMarcasRuins,
            'avgAval'           => $avgAval
        ];
        return $data;
    }
}
