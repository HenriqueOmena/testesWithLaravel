<?php

use Illuminate\Database\Seeder;

class OrgaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orgao')->insert(
            [
                'nome' => 'Associação Do Futebol',
                'codigo' => 'ADF'
            ]
        );
        DB::table('orgao')->insert(
            [
                'nome' => 'Unidos Do FuteVolei',
                'codigo' => 'UDF'
            ]
        );
        DB::table('orgao')->insert(
            [
                'nome' => 'Atletas Desportistas',
                'codigo' => 'ADP'
            ]
        );

    }
}
