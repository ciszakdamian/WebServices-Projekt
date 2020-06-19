<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonsModel;

class PersonsController extends Controller
{
    /**
     * Return all persons from DB
     * @return \Illuminate\Http\JsonResponse
     */
    public function persons(){
        return response()->json(PersonsModel::get(), 200);
    }

    /**
     * Return person by select id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function personsById($id)
    {
        $person = PersonsModel::find($id);
        if (is_null($person)) {
            return response()->json(["message" => "Person not found!"], 404);
        }
        return response()->json(PersonsModel::find($id), 200);
    }

    /**
     * Add new person to DB
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function personsSave(Request $request){
        $person = PersonsModel::create($request->all());
        return response()->json($person, 201);
    }

    /**
     * Update person by id
     * @param Request $request
     * @param PersonsModel $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function personsUpdate(Request $request, $id){
        $person = PersonsModel::find($id);
        if(is_null($person)){
            return response()->json(["message" => "Person not found!"], 404);
        }
        $person->update($request->all());
        return response()->json($person, 200);
    }

    /**
     * Delete person by Id
     * @param Request $request
     * @param PersonsModel $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function personsDelete(Request $request, $id){
        $person = PersonsModel::find($id);
        if(is_null($person)){
            return response()->json(["message" => "Person not found!"], 404);
        }
        $person->delete();
        return response()->json(null, 204);
    }
}
