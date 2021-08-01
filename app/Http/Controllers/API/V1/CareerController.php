<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CareerResource;
use App\Models\Career;
use Illuminate\Http\Request;

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
}
