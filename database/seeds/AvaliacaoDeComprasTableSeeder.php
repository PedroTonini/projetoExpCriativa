<?php

use Illuminate\Database\Seeder;
use App\Models\AvaliacaoDeCompra;

class AvaliacaoDeComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AvaliacaoDeCompra::create([
            'opiAtendimento' => '5',
            'opiPreco' => '5',
            'opiMarca' => '5',
            'opiProduto' => '5',
            'compra_id' => '1',
            'user_id' => '3',
        ]);
    }
}
