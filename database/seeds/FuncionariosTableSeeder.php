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
            'user_id' => '2',
            'cargo_id' => '1',
            'dataAdmissao' => '2020-02-15'
        ]);
        Funcionario::create([
            'user_id' => '5',
            'cargo_id' => '1',
            'dataAdmissao' => '2020-03-24'
        ]);
        Funcionario::create([
            'user_id' => '6',
            'cargo_id' => '1',
            'dataAdmissao' => '2020-03-10'
        ]);
    }
}
