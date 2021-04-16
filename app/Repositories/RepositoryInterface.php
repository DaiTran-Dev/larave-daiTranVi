<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
    * Get all data to table Articel
    * @return collection Return a collection
    */
    public function get();

    /**
    * Get a model by id
    * @param $id
    * @return mixed
    */
    public function getById($id);

    /**
    * Store record in table
    * @param array $attributes
    * @return mixed
    */
    public function create($attributes = []);

    /**
    * Update record in table
    * @param  $id
    * @param array $attributes
    * @return mixed
    */
    public function update($id, $attributes = []);

    /**
    * Delete record in table
    * @param $id
    * @return void
    */
    public function delete($id);
}
