<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'name' => 'James',
            'surname' => 'Cameron',
            'gender' => 'M',
            'birth_date' => Carbon::create('1954', '08', '16')
        ]);

        DB::table('persons')->insert([
            'name' => 'Sigourney',
            'surname' => 'Weaver',
            'gender' => 'F',
            'birth_date' => Carbon::create('1949', '10', '08')
        ]);
    }
}
