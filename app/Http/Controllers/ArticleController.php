<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articel;

class ArticleController extends Controller
{
    /**
    * Get all data to table Articel
    * @return collection Return a collection Article
    */
    public function getArticel(){
        return Articel::all();
    }

    /**
    * Show a Articel
    * @return Articel Return a Articel
    */
    public function searchArticel(Articel $articel){
        return $articel;
    }

    /**
    * Store record in table
    * @param Request $request
    * @return Article Return a Articel and response status 201
    */
    public function creatArticel(Request $request){
        $article = Articel::create($request->all());
        return response()->json($article, 201);
    }

    /**
    * Update record in table
    * @param Request $request
    * @param Articel $articel
    * @return Article Return a Articel and response status 200
    */
    public function updateArticel(Request $request,Articel $articel){
        $articel->update($request->all());
        return response()->json($articel, 200);
    }

    /**
    * Delete record in table
    * @param Articel $articel
    * @return void Return response status 204
    */
    public function deleteArticel(Articel $articel){
        $articel->delete();
        return response()->json(null, 204);
    }
}
