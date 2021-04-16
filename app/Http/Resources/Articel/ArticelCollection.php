<?php

namespace App\Http\Resources\Articel;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;
    }
}
