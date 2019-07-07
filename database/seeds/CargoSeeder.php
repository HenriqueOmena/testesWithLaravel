<?php

use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->insert(
            [
                'descricao' => 'Presidente',
            ]
        );
        DB::table('cargo')->insert(
            [
                'descricao' => 'Funcionario',
            ]
        );
        DB::table('cargo')->insert(
            [
                'descricao' => 'Diretor',
            ]
        );
        DB::table('cargo')->insert(
            [
                'descricao' => 'Assistente',
            ]
        );

    }
}
