<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('production_companies')->insert([
            'company' => '20th Century Fox',
            'country' => 'USA',
            'year_of_founded' => 1935
        ]);
    }
}
