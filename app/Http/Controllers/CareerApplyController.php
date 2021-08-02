<?php

namespace App\Http\Controllers;

use App\Models\CareerApply;
use Illuminate\Http\Request;

class CareerApplyController extends Controller
{
    public function index(){
        $careersApply = CareerApply::where('status', true)->orderBy('id', 'desc')->paginate(10);
        return view('careers_apply.index', compact('careersApply'), ['meta_title' => __('Careers Applying List')]);
    }
    public function destroy(Request $request, $id)
    {
        $category = CareerApply::findOrFail($id);

        $category->delete();

        $request->session()->flash('status', __('Application was deleted!'));
        return redirect()->route('careers.index');
    }
}
