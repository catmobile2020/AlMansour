<?php

namespace App\Http\Controllers;

use App\Helper\DeleteOldFile;
use App\Helper\StoreFile;
use App\Http\Requests\UpdateInfo;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function edit(){
        $info = Info::first();
        return view('infos.edit', compact('info'));
    }
    public function update(UpdateInfo $request, $id){
        $info = Info::findOrFail($id);

        $validateData = $request->validated();

        if ($request->hasFile('logo')) {
            if (isset($info->logo)) {
                DeleteOldFile::delete($info->logo);
            }
            $imageName = StoreFile::save($request->logo, 'logo');
            $validateData['logo'] = $imageName;
        }else {
            unset($validateData['logo']);
        }
        if ($request->hasFile('favicon')) {
            if (isset($info->favicon)) {
                DeleteOldFile::delete($info->favicon);
            }
            $imageName = StoreFile::save($request->favicon, 'favicon');
            $validateData['favicon'] = $imageName;
        }else {
            unset($validateData['favicon']);
        }

        $info->fill($validateData);

        $info->save();
        $request->session()->flash('status', __('Information was Updated'));

        return back();
    }
}
