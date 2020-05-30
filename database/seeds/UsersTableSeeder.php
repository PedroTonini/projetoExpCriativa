<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administradores gerais',
            'email' => 'admin@avaliasys.com',
            'password' => bcrypt('123123'),
            'CPF' => '00000000000',
            'dataNascimento' => '0000-01-01',
            'telefone' => '00000000000',
        ])->attachRole(1);
        User::create([
            'name' => 'Heloise Esther Marcela Monteiro',
            'email' => 'heloisemonteiro@avaliasys.com',
            'password' => bcrypt('123'),
            'CPF' => '64207009493',
            'dataNascimento' => '1944-05-17',
            'telefone' => '67983821663',
        ])->attachRole(2);
        User::create([
            'name' => 'Marcelo Lara',
            'email' => 'marcelolara@cbsaperfeicoamento.com',
            'password' => bcrypt('123'),
            'CPF' => '46729986220',
            'dataNascimento' => '1991-01-04',
            'telefone' => '83994415257',
        ])->attachRole(3);
    }
}
