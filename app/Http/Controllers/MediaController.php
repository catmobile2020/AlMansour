<?php

namespace App\Http\Controllers;

use App\Helper\StoreFile;
use App\Models\Media;
use App\Models\Service;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function show($id){
        $service = Service::findOrFail($id);

        return view('media.show', compact('service'));
    }
    public function dropzoneFileUpload(Request $request){
        if ($request->hasFile('file')) {
            $imageName = StoreFile::save($request->file, 'media');
            $request->file = $imageName;
        }
        $request->service_id = '1';

        Media::create([
            'file' => $imageName,
            'service_id' => '1'
        ]);

        return response()->json(['success'=>$imageName]);
    }
    public function destroy(Request $request, $id){
        $service = Media::findOrFail($id);
        $service->delete();
        return 200;
    }
}
