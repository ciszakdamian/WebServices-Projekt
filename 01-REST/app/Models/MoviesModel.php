<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoviesModel extends Model
{
    protected $table = "movies";

    public $timestamps = false;

    protected $fillable = [
        'title',
        'movie_cover',
        'category',
        'director_id',
        'year_of_production',
        'plot_description',
        'price'
    ];

}
