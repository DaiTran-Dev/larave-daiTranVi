<?php

namespace App\Repositories\Articel;

use App\Http\Resources\Articel\ArticelCollection;
use App\Http\Resources\Articel\ArticelResource;
use App\Repositories\BaseRepository;

class ArticelRepository extends BaseRepository implements ArticelInterface
{
    //get 5 record
    public function getArticel()
    {
        return $this->model->take(5)->get();
    }

    // set model
    public function getModel(){
        return \App\Models\Articel::class;
    }

     /**
    * Get record in table articel by id
    * @return mixed
    */
    public function searchArticelById($id){
        return $this->model->where('id','=',$id)->get();
    }

    /**
    * Get record in table articel by name
    * @return mixed
    */
    public function searchArticelByTitle($tite){
        return $this->model->where('title','=',$tite)->get();
    }
}
