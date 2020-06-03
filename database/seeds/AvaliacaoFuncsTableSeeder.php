<?php

use Illuminate\Database\Seeder;
use App\Models\Avaliacao_Func;

class AvaliacaoFuncsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Avaliacao_Func::create([
            'opiEntrosamento' => 3,
            'opiTexto'        => 'É um colega de trabalho muito amigável porém falta foco no trabalho',
            'funcionario_id'  => 1
        ]);
        Avaliacao_Func::create([
            'opiEntrosamento' => 5,
            'opiTexto'        => 'É um funcionário excelente não tem o que falar.',
            'funcionario_id'  => 2
        ]);
        Avaliacao_Func::create([
            'opiEntrosamento' => 4,
            'opiTexto'        => 'Você é um ótimo companheiro mas pode se dedicar um pouco mais pro serviço',
            'funcionario_id'  => 1
        ]);
        Avaliacao_Func::create([
            'opiEntrosamento' => 5,
            'opiTexto'        => 'Melhor vendedor que conheço, engaja o cliente como ninguém',
            'funcionario_id'  => 3
        ]);
    }
}
