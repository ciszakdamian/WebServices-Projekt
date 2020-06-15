<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmy')->insert([
            'tytul' => 'Nietykalni',
            'okladka' => 'nietykalni.jpg',
            'kategoria' => 'Biograficzny',
            'rezyser' => 'Olivier Nakache',
            'rok_produkcji' => 2011,
            'opis_fabuly' => 'Ta historia zdarzyła się naprawdę. Sparaliżowany na skutek wypadku milioner zatrudnia do pomocy i opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia. Zderzenie dwóch skrajnie różnych światów daje początek szeregowi niewiarygodnych przygód i przyjaźni, która czyni ich... nietykalnymi.',
            'cena' => 37.44
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Forrest Gump',
            'okladka' => 'forrest_gump.jpg',
            'kategoria' => 'Dramat',
            'rezyser' => 'Robert Zemeckis',
            'rok_produkcji' => 1994,
            'opis_fabuly' => 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.',
            'cena' => 25.99
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Ojciec Chrzestny II',
            'okladka' => 'ojciec_chrzestny_2.jpg',
            'kategoria' => 'Dramat',
            'rezyser' => 'Francis Ford Coppola',
            'rok_produkcji' => 1974,
            'opis_fabuly' => 'Rok 1917. Młody Vito Corleone stawia pierwsze kroki w mafijnym świecie Nowego Jorku. Ponad 40 lat później jego syn Michael walczy o interesy i dobro rodziny.',
            'cena' => 42.00
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Władca Pierścieni Powrót Króla',
            'okladka' => 'wladca_pierscieni_powrot_krola.jpg',
            'kategoria' => 'Fantasy',
            'rezyser' => 'Peter Jackson',
            'rok_produkcji' => 2003,
            'opis_fabuly' => 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów',
            'cena' => 19.99
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Milczenie Owiec',
            'okladka' => 'milczenie_owiec.jpg',
            'kategoria' => 'Thriller',
            'rezyser' => 'Jonathan Demme',
            'rok_produkcji' => 1991,
            'opis_fabuly' => 'Seryjny morderca i inteligentna agentka łączą siły, by znaleźć przestępcę obdzierającego ze skóry swoje ofiary.',
            'cena' => 15.23
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Avatar',
            'okladka' => 'avatar.jpg',
            'kategoria' => 'Fantasy',
            'rezyser' => 'James Cameron',
            'rok_produkcji' => 2009,
            'opis_fabuly' => 'Jake, sparaliżowany były komandos, zostaje wysłany na planetę Pandora, gdzie zaprzyjaźnia się z lokalną społecznością i postanawia jej pomóc.',
            'cena' => 29.99
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Szybcy i wściekli',
            'okladka' => 'fast_and_furious.jpg',
            'kategoria' => 'Akcji',
            'rezyser' => 'Rob Cohen',
            'rok_produkcji' => 2001,
            'opis_fabuly' => 'Policjant przenika do grupy organizującej nielegalne wyścigi samochodowe. Sytuacja komplikuje się, gdy poznaje bliżej siostrę lidera przestępców.',
            'cena' => 22.00
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Jestem legendą',
            'okladka' => 'i_am_legend.jpg',
            'kategoria' => 'Horror',
            'rezyser' => 'Francis Lawrence',
            'rok_produkcji' => 2007,
            'opis_fabuly' => 'Tajemniczy wirus wymordował lub zamienił w krwiożercze bestie prawie całą ludzkość. Samotny naukowiec Robert Neville poszukuje szczepionki, by odwrócić mutację.',
            'cena' => 19.49
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Titanic',
            'okladka' => 'titanic.jpg',
            'kategoria' => 'Thriller',
            'rezyser' => 'James Cameron',
            'rok_produkcji' => 1997,
            'opis_fabuly' => 'Rok 1912, brytyjski statek Titanic wyrusza w swój dziewiczy rejs do USA. Na pokładzie emigrant Jack przypadkowo spotyka arystokratkę Rose.',
            'cena' => 49.99
        ]);


    }
}
