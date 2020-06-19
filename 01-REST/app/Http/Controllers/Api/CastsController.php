<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CastsModel;
use Illuminate\Http\Request;

class CastsController extends Controller
{
    /**
     * Return all casts from DB
     * @return \Illuminate\Http\JsonResponse
     */
    public function casts(){
        return response()->json(CastsModel::get(), 200);
    }

    /**
     * Return cast by select id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function castsById($id)
    {
        $cast = CastsModel::find($id);
        if (is_null($cast)) {
            return response()->json(["message" => "Cast not found!"], 404);
        }
        return response()->json(CastsModel::find($id), 200);
    }

    /**
     * Add new cast to DB
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function castsSave(Request $request){
        $cast = CastsModel::create($request->all());
        return response()->json($cast, 201);
    }

    /**
     * Update cast by id
     * @param Request $request
     * @param CastsModel $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function castsUpdate(Request $request, $id){
        $cast = CastsModel::find($id);
        if(is_null($cast)){
            return response()->json(["message" => "Cast not found!"], 404);
        }
        $cast->update($request->all());
        return response()->json($cast, 200);
    }

    /**
     * Delete cast by Id
     * @param Request $request
     * @param CastsModel $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function castsDelete(Request $request, $id){
        $cast = CastsModel::find($id);
        if(is_null($cast)){
            return response()->json(["message" => "Cast not found!"], 404);
        }
        $cast->delete();
        return response()->json(null, 204);
    }
}
