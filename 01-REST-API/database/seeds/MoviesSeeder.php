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
            'director_id' => DB::table('persons')->where([
                ['name', '=', 'James'],
                ['surname', '=', 'Cameron']
            ])->value('id'),
            'production_company_id' => DB::table('production_companies')->where('company', '=', '20th Century Fox')->value('id'),
            'year_of_production' => 2009,
            'plot_description' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora.',
            'price' => 29
        ]);

        DB::table('movies')->insert([
            'title' => 'Titanic',
            'movie_cover' => 'titanic.jpg',
            'category' => 'Action',
            'director_id' => DB::table('persons')->where([
                ['name', '=', 'James'],
                ['surname', '=', 'Cameron']
            ])->value('id'),
            'production_company_id' => DB::table('production_companies')->where('company', '=', '20th Century Fox')->value('id'),
            'year_of_production' => 1997,
            'plot_description' => 'Rok 1912, brytyjski statek Titanic wyrusza w swój dziewiczy rejs do USA. Na pokładzie emigrant Jack przypadkowo spotyka arystokratkę Rose.',
            'price' => 39
        ]);

        DB::table('movies')->insert([
            'title' => 'Szybscy i Wściekli',
            'movie_cover' => 'fastfurious.jpg',
            'category' => 'Action',
            'director_id' => DB::table('persons')->where([
                ['name', '=', 'Rob'],
                ['surname', '=', 'Cohen']
            ])->value('id'),
            'production_company_id' => DB::table('production_companies')->where('company', '=', '20th Century Fox')->value('id'),
            'year_of_production' => 1999,
            'plot_description' => 'Policjant przenika do grupy organizującej nielegalne wyścigi samochodowe. Sytuacja komplikuje się, gdy poznaje bliżej siostrę lidera przestępców.',
            'price' => 59
        ]);
    }
}
