<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class InfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (Storage::exists($this->logo)){
            $this['logo'] = asset(Storage::url($this->logo));
        }else {
            $this['logo'] = asset('media/default_image.png');
        }
        if (Storage::exists($this->favicon)){
            $this['favicon'] = asset(Storage::url($this->favicon));
        }else {
            $this['favicon'] = asset('media/default_image.png');
        }
        return parent::toArray($request);
    }
}
