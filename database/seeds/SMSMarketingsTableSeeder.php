<?php

use Illuminate\Database\Seeder;
use App\Models\SmsMarketing;

class SMSMarketingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmsMarketing::create([
            'conteudo' => 'Você recebeu uma promoção da loja Rosa Chock, utilize o cupom <promoCode>
            e ganhe R$ 25 de desconto na sua próxima compra',
            'promocao_id' => '1'
        ]);
    }
}
