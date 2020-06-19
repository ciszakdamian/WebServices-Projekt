<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionCompaniesModel extends Model
{
    protected $table = "production_companies";

    public $timestamps = false;

    protected $fillable = [
        'company',
        'country',
        'year_of_founded'
    ];
}
