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
        return new ArticelCollection($this->model->take(5)->get());
    }

    // set model
    public function getModel(){
        return \App\Models\Articel::class;
    }
}
