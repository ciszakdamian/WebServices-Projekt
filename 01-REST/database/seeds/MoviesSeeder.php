<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Avatar',
            'movie_cover' => 'avatar.jpg',
            'category' => 'Fantasy',
            'director_id' => DB::table('persons')->where('name', '=', 'James')->value('id'),
            'year_of_production' => 2009,
            'plot_description' => 'Jake, sparaliżowany były komandos, zostaje wysłany na planetę Pandora, gdzie zaprzyjaźnia się z lokalną społecznością i postanawia jej pomóc.',
            'price' => 29.99
        ]);
    }
}
