<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImovelStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imovel_status')->insert([
            [
                'description'  => 'Na Planta'
            ],
            [
                'description'  => 'Em Construção'
            ],
            [
                'description'  => 'Pronto para morar'
            ],
        ]);
    }
}
