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
        User::create([
            'name' => 'Maria Fernanda Oliveira',
            'email' => 'mariaoliveira@email.com',
            'password' => bcrypt('123'),
            'CPF' => '12853415031',
            'dataNascimento' => '1988-02-24',
            'telefone' => '14997824257',
        ])->attachRole(3);
        User::create([
            'name' => 'Daniela Arbex',
            'email' => 'daniela@avaliasys.com',
            'password' => bcrypt('123'),
            'CPF' => '55575713024',
            'dataNascimento' => '1980-10-22',
            'telefone' => '17923904663',
        ])->attachRole(2);User::create([
            'name' => 'Maria Luiza Carriel',
            'email' => 'marialuiza@avaliasys.com',
            'password' => bcrypt('123'),
            'CPF' => '56842330076',
            'dataNascimento' => '1983-12-17',
            'telefone' => '14983251678',
        ])->attachRole(2);
    }
}
