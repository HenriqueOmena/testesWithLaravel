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
        $this->call(MilitanteSeeder::class);
        $this->call(OrgaoSeeder::class);
        $this->call(CargoSeeder::class);
    }
}
