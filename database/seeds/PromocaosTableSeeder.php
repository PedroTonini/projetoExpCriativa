<?php

use Illuminate\Database\Seeder;
use App\Models\Promocao;

class PromocaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promocao::create([
            'nome' => 'R$25 OFF',
            'valor' => '25',
            'promoCode' => '25OFF'
        ]);
    }
}
