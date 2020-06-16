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

    /**
     * Add new movie to DB
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function moviesSave(Request $request){
        $movie = MoviesModel::create($request->all());
        return response()->json($movie, 201);
    }


    /**
     * Update movie by id
     * @param Request $request
     * @param MoviesModel $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function moviesUpdate(Request $request, MoviesModel $id ){
        $id->update($request->all());
        return response()->json($id, 200);
    }


}
