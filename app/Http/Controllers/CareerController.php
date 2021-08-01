<?php

namespace App\Http\Controllers;

use App\Events\CareerPosted;
use App\Http\Requests\StoreCareer;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $careers = Career::orderBy('id')->paginate('10');
        return view('careers.index', compact('careers'), ['meta_title' => __('Careers')]);
    }

    public function create()
    {
        return view('careers.create', ['meta_title' => __('Add Career')]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareer $request)
    {
        $validateData = $request->validated();

        $career = Career::create($validateData);

        event(new CareerPosted($career));

        $request->session()->flash('status', 'Career was created!');

        return redirect()->route('careers.edit', ['career' => $career->id]);
    }

    public function edit($id){
        $career = Career::find($id);
        return view('careers.edit', compact('career'));
    }
    public function update(StoreCareer $request, $id)
    {
        $carrer = Career::findOrFail($id);

        $validateData = $request->validated();

        $carrer->fill($validateData);

        $carrer->save();

        $request->session()->flash('status', __('Career was Updeted'));

        return redirect()->route('careers.edit', ['career' => $carrer->id]);
    }
    public function destroy(Request $request, $id)
    {
        $category = Career::findOrFail($id);

        $category->delete();

        $request->session()->flash('status', __('Career was deleted!'));
        return redirect()->route('careers.index');
    }
}
