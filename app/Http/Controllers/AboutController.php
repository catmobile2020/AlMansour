<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAbout;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit($id)
    {
        $about = About::findOrFail($id);

        return view('abouts.edit', [
            'about' => $about,
            'meta_title' => __('Update About App')
        ]);
    }

    public function update(UpdateAbout $request, $id)
    {
        $about = About::findOrFail($id);

        $validateData = $request->validated();

        $about->fill($validateData);

        $about->save();
        $request->session()->flash('status', __('About App was Updated'));

        return back();
    }
}
