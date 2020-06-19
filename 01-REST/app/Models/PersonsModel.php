<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonsModel extends Model
{
    protected $table = "persons";

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'gender',
        'birth_date'
    ];
}
