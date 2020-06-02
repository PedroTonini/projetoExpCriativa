<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PromocaosTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(FuncionariosTableSeeder::class);
        $this->call(ComprasTableSeeder::class);
        $this->call(SMSMarketingsTableSeeder::class);
        $this->call(Cliente_PromocaosTableSeeder::class);
        $this->call(AvaliacaoDeComprasTableSeeder::class);
    }
}
