<?php

use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'nome' => 'Vendedor',
            'salario' => '2350'
        ]);
    }
}
