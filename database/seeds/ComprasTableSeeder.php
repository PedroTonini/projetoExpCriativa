<?php

use Illuminate\Database\Seeder;
use App\Models\Compra;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compra::create([
            'funcionario_id' => '1',
            'CPFCliente' =>  '46729986220',
            'valorTotal' => '256.30'
        ]);
        Compra::create([
            'funcionario_id' => '1',
            'CPFCliente' =>  '46729986220',
            'valorTotal' => '125.45'
        ]);
        Compra::create([
            'funcionario_id' => '1',
            'CPFCliente' =>  '46729986220',
            'valorTotal' => '350.20'
        ]);
        Compra::create([
            'funcionario_id' => '1',
            'CPFCliente' =>  '46729986220',
            'valorTotal' => '44.90'
        ]);
    }
}
