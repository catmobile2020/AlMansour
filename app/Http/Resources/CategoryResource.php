<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [];

        if ($request['lang'] == 'en'){
            $data = [
                'id'                => $this->id,
                'name'              => $this->en_name,
                'image'             => asset(Storage::url($this->image)),
                'children_count'    => $this->children->count(),
                'children'          => $this->children
            ];
        }else {
            $data = [
                'id'                => $this->id,
                'name'              => $this->ar_name,
                'image'             => asset(Storage::url($this->image)),
                'children_count'    => $this->children->count(),
                'children'          => $this->children
            ];
        }
        return $data;
    }
}
