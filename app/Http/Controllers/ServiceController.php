<?php

namespace App\Http\Controllers;

use App\Events\ServicePosted;
use App\Helper\DeleteOldFile;
use App\Helper\StoreFile;
use App\Http\Requests\StoreServices;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('services.index', [
            'services' => Service::paginate(),
            'meta_title' => __('Services'),
        ]);
    }

    public function create()
    {
        return view('services.create', [
            'categories' => Category::all(),
            'meta_title' => __('Add Service')
        ]);
    }

    public function store(StoreServices $request)
    {
        $validateData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            unset($validateData['thumbnail']);
            $imageName = StoreFile::save($request->thumbnail, 'service');
            $validateData['thumbnail'] = $imageName;
        }

        $service = Service::create($validateData);
        event(new ServicePosted($service));

        $request->session()->flash('status', 'Service was created!');

        return redirect()->route('services.edit', ['service' => $service->id]);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('services.edit', [
            'categories' => Category::all(),
            'service' => $service,
            'meta_title' => __('Update Service')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServices $request, $id)
    {
        $service = Service::findOrFail($id);

        $validateData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            if (isset($service->thumbnail)) {
                DeleteOldFile::delete($service->thumbnail);
            }
            $imageName = StoreFile::save($request->thumbnail, 'service');
            $validateData['thumbnail'] = $imageName;
        }else {
            unset($validateData['thumbnail']);
        }

        $service->fill($validateData);

        $service->save();

        $request->session()->flash('status', __('Service was Updeted'));

        return redirect()->route('services.edit', ['service' => $service->id]);
    }
    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        $request->session()->flash('status', __('Service was deleted!'));
        return redirect()->route('services.index');
    }
}
