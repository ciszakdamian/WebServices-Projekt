<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductionCompaniesModel;
use Illuminate\Http\Request;

class ProductionCompaniesController extends Controller
{
    /**
     * Return all production companies from DB
     * @return \Illuminate\Http\JsonResponse
     */
    public function production_companies(){
        return response()->json(ProductionCompaniesModel::get(), 200);
    }

    /**
     * Return company by select id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function production_companiesById($id)
    {
        $company = ProductionCompaniesModel::find($id);
        if (is_null($company)) {
            return response()->json(["message" => "Company not found!"], 404);
        }
        return response()->json(ProductionCompaniesModel::find($id), 200);
    }

    /**
     * Add new company to DB
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function production_companiesSave(Request $request){
        $company = ProductionCompaniesModel::create($request->all());
        return response()->json($company, 201);
    }

    /**
     * Update company by id
     * @param Request $request
     * @param ProductionCompaniesModel $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function production_companiesUpdate(Request $request, $id){
        $company = ProductionCompaniesModel::find($id);
        if(is_null($company)){
            return response()->json(["message" => "Company not found!"], 404);
        }
        $company->update($request->all());
        return response()->json($company, 200);
    }

    /**
     * Delete company by Id
     * @param Request $request
     * @param ProductionCompaniesModel $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function production_companiesDelete(Request $request, $id){
        $company = ProductionCompaniesModel::find($id);
        if(is_null($company)){
            return response()->json(["message" => "Company not found!"], 404);
        }
        $company->delete();
        return response()->json(null, 204);
    }
}
