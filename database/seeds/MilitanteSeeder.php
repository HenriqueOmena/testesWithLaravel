<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class MilitanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('militante')->truncate();

        factory(\App\Militante::class, 5)->create()->each(function($Militante){

        });
        \App\Militante::create([
            'nome' => 'Nome do Produto',
            'num_regional' => 123456
        ]);
    }
}
