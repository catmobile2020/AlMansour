<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CareerResource;
use App\Models\Career;
use App\Models\CareerApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index(Career $career, Request $request){
        $perPage = $request->get('per_page', 15);
        return CareerResource::collection($career->orderBy('id', 'desc')->paginate($perPage)
            ->appends([
                'per_page' => $perPage
            ])
        );
    }
    public function show(Career $career, Request $request){
        return CareerResource::collection($career->where('id', $request->id)->get());
    }
    public function apply(CareerApply $careerApply, Request $request){
        $validator = Validator::make($request->all(), [
            'name'      => 'required|min:2|max:255|string',
            'email'     => 'required|min:4|email',
            'career_id' => 'required|exists:careers,id',
            'mobile'    => 'required|min:5|string',
            'cv'        => 'required|mimes:pdf,doc,docx|max:10000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validator->messages(),
            ], '400');
        }

        if ($request->hasFile('cv')) {
            $cvName = '/cv/' . time() . '.' . $request->file('cv')->extension();
            Storage::putFileAs('/', $request->file('cv'), $cvName);
            unset($request->cv);
            $request->merge([
                'cv_name' => $cvName,
            ]);
        }

        $careerApply->create([
            'career_id' => $request->career_id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'cv' => $request->cv_name
        ]);

        return response()->json([
            'message' => 'Apply Successfully'
        ], 200);
    }
}
