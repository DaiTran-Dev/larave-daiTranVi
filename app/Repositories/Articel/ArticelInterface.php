<?php

namespace App\Repositories\Articel;

interface ArticelInterface
{
    /**
    * Get record in table articel
    * @return mixed
    */
    public function getArticel();

    /**
    * Get record in table articel by id
    * @return mixed
    */
    public function searchArticelById($id);

    /**
    * Get record in table articel by title
    * @return mixed
    */
    public function searchArticelByTitle($title);
}
