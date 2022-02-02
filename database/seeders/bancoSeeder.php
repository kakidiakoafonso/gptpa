<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bancos')->insert([
            'nome' => "BANCO BAI",
            'descricao' => "Banco Angolano de Investimento"
        ]);
    }
}
