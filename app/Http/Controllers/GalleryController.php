<?php

namespace App\Http\Controllers;

use App\Helper\DeleteOldFile;
use App\Helper\StoreFile;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }
    public function show($id){
        //
    }
    public function create(){
        return view('galleries.create');
    }
    public function dropzoneFileUpload(Request $request){
        if ($request->hasFile('file')) {
            $imageName = StoreFile::save($request->file, 'gallery');
            $request->file = $imageName;
        }

        Gallery::create([
            'image' => $imageName
        ]);

        return response()->json([
            'success' => $imageName
        ]);
    }
    public function destroy(Request $request, $id){
        $gallery = Gallery::findOrFail($id);
        DeleteOldFile::delete($gallery->image);
        $gallery->delete();
        return 200;
    }
}
