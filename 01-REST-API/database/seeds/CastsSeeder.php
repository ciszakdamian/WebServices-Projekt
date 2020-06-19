<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casts')->insert([
            'movies_id' => DB::table('movies')->where('title', '=', 'Avatar')->value('id'),
            'persons_id' => DB::table('persons')->where([
                ['name', '=', 'Sigourney'],
                ['surname', '=', 'Weaver']
            ])->value('id'),
            'role' => 'Dr. Grace Augustine'
        ]);
    }
}
