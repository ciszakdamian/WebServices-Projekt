<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoviesModel extends Model
{
    protected $table = "filmy";

    public $timestamps = false;

    protected $fillable = [
        'tytul',
        'okladka',
        'kategoria',
        'rezyser',
        'rok_produkcji',
        'opis_fabuly',
        'cena'
    ];

}
