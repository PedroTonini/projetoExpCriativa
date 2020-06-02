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
        Promocao::create([
            'nome' => 'R$50 OFF',
            'valor' => '50',
            'promoCode' => '50OFF',
            'validade'  => '2020-06-13'
        ]);
        Promocao::create([
            'nome' => 'R$10 OFF',
            'valor' => '10',
            'promoCode' => '10OFF'
        ]);
        Promocao::create([
            'nome' => 'R$20 OFF',
            'valor' => '20',
            'promoCode' => '20OFF'
        ]);
    }
}
