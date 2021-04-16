<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticelRequest;
use App\Http\Resources\Articel\ArticelResource;
use Illuminate\Http\Request;
use App\Models\Articel;
use App\Repositories\Articel\ArticelRepository;

class ArticleController extends Controller
{
    protected $articelRepo;

    /**
     * @param ArticelRepository $articelRepo
     */
    public function __construct(ArticelRepository $articelRepo)
    {
        $this->articelRepo = $articelRepo;
    }

    /**
    * Get all data to table Articel
    * @return collection Return a collection Article
    */
    public function getArticel()
    {
        $result = $this->articelRepo->getArticel();
        return response($result,200);
    }

    /**
    * Show a Articel
    * @return Articel Return a Articel
    */
    public function searchArticel(ArticelRequest $articel)
    {
        return $articel;
    }

    /**
    * Store record in table
    * @param ArticelRequest $request
    * @return Article Return a Articel and response status 201
    */
    public function creatArticel(ArticelRequest $request)
    {
        $result = $this->articelRepo->create($request->all());
        return response($result,200);
    }

    /**
    * Update record in table
    * @param ArticelRequest $request
    * @param int $id
    * @return Article Return a Articel and response status 200
    */
    public function updateArticel(ArticelRequest $request,$id)
    {
        $result = $this->articelRepo->update($id,$request->all());
        if($result){
            return response($result,200);
        }
        return response(null,200);
    }

    /**
    * Delete record in table
    * @param int $id
    * @return void Return response status 204
    */
    public function deleteArticel($id)
    {
        $result = $this->articelRepo->delete($id);
        if($result){
            return response()->json(null, 200);
        }
        return response()->json(null, 400);
    }
}
