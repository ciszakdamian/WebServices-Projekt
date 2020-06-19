<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CastsModel extends Model
{
    protected $table = "casts";

    public $timestamps = false;

    protected $fillable = [
        'movies_id',
        'persons_id',
        'role'
    ];
}
