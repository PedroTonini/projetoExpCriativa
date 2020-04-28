<?php

use Illuminate\Database\Seeder;
use App\User;

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
        ]);
    }
}
