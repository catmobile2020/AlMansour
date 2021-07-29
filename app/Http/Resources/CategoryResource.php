<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
                'id'            => $this->id,
                'name'         => $this->en_name
            ];
        }else {
            $data = [
                'id'            => $this->id,
                'name'         => $this->ar_name
            ];
        }


        return $data;
    }
}
