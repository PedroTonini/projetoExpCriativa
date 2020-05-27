<?php

use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
            'user_id' => '3',
            'cargo_id' => '1',
            'dataAdmissao' => '2020-02-15'
        ]);
    }
}
