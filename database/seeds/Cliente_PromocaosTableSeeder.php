<?php

use Illuminate\Database\Seeder;
use App\Models\ClientePromocao;

class Cliente_PromocaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientePromocao::create([
            'cliente_id' => '1',
            'promocao_id' => '1',
        ]);
    }
}
