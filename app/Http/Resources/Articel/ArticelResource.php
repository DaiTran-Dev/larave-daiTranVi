<?php

namespace App\Http\Resources\Articel;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Id'=>$this->id,
            'Title'=>$this->title,
            'Content'=>$this->body,
            'Created'=>$this->created_at ? $this->created_at->format('H:i:s d/m/Y') : null,
        ];
    }
}
