<?php

namespace App\Http\Resources;

use App\Models\Media;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ServiceResource extends JsonResource
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
                'category_id'   => $this->category->id,
                'category_name' => $this->category->en_name,
                'title'         => $this->en_title,
                'contact'       => $this->en_content,
                'thumbnail'     => asset(Storage::url($this->thumbnail)),
                'video'         => $this->video,
                'media'         => MediaResource::collection($this->media)
            ];
        }else {
            $data = [
                'id'            => $this->id,
                'category_id'   => $this->category->id,
                'category_name' => $this->category->ar_name,
                'title'         => $this->ar_title,
                'contact'       => $this->ar_content,
                'thumbnail'     => asset(Storage::url($this->thumbnail)),
                'video'         => $this->video,
                'media'         => MediaResource::collection($this->media)
            ];
        }

        return $data;
    }
}
