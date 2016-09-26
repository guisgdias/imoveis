<?php

use Illuminate\Database\Seeder;

class ImovelTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imovel_types')->insert([
            [
                'description'  => 'Residencial'
            ],
            [
                'description'  => 'Comercial'
            ],
        ]);
    }
}
