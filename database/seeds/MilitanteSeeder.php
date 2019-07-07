<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;
use Faker\Factory as Faker;
use App\Militante;

class MilitanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('militante')->truncate();

        factory(Militante::class, 10)->create();

    }
}
