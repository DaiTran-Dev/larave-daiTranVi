<?php

namespace App\Repositories;

use App\Http\Resources\Articel\ArticelCollection;
use App\Http\Resources\Articel\ArticelResource;
use App\Models\Articel;
use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    /**
    * Attribute $model
    */
    protected $model;

    /**
    * construct
    */
    public function __construct()
    {
        $this->setModel();
    }

    /**
    * Get model class
    * @return Model::class
    */
    abstract function getModel();

    /**
    * Set value attribute $model
    * @return void
    */
    public function setModel(){
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
    * Get all data to table Articel
    * @return collection Return a collection
    */
    public function get()
    {
        return  $this->model->all();
    }

    /**
    * Get a model by id
    * @param $id
    * @return mixed
    */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
    * Store record in table
    * @param array $attributes
    * @return mixed
    */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
    * Update record in table
    * @param  $id
    * @param array $attributes
    * @return mixed
    */
    public function update($id, $attributes = [])
    {
        $result = $this->model->find($id);
        if($result){
            if($result->update($attributes)){
                return $result;
            }else{
                return false;
            }
        }
        return false;
    }

    /**
    * Delete record in table
    * @param $id
    * @return boolean
    */
    public function delete($id)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }
}
