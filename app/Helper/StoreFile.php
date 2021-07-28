<?php


namespace App\Helper;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class StoreFile
{
    /**
     * @param $file
     * @param string $folder
     * @return string
     */
    static function save($file, $folder = 'media'){
        $data           = Image::make($file)->encode('jpg', 90);
        $data->response('jpg');
        $imageName      = $folder . '/' . time() . Str::random(5) . '.jpg';

        Storage::put($imageName, $data);

        return $imageName;
    }
}
