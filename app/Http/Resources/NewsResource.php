<?php


namespace App\Http\Resources;

use \Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class NewsResource extends JsonResource
{
    public function toArray($request)
    {
        if (Storage::exists($this->image)){
            $this['image'] = asset(Storage::url($this->image));
        }else {
            $this['image'] = asset('img/default_image.png');
        }

        return $data = [
            'id' => $this->id,
            'title' => $this->title,
            'caption' => $this->caption,
            'image' => asset($this->image),
            'content' => $this->content,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at
        ];

    }
}
