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
            'CPFCliente' =>  '64207009493',
            'valorTotal' => '256.30'
        ]);
    }
}
