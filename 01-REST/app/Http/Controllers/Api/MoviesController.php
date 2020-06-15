<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MoviesModel;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Return all movies from DB
     * @return \Illuminate\Http\JsonResponse
     */
    public function movies(){
        return response()->json(MoviesModel::get(), 200);
    }

    /**
     * Return movie by select id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function moviesById($id){
        return response()->json(MoviesModel::find($id), 200);
    }
}
