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
        $this->call(PersonsSeeder::class);
        $this->call(ProductionCompaniesSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(CastsSeeder::class);
    }
}
