<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $perPage = $request->get('per_page', 15);
        return ServiceResource::collection(Service::where('category_id', $request->category_id)->paginate($perPage)
            ->appends([
                'per_page' => $perPage
            ])
        );
    }
    public function show(Service $service, Request $request){
        return ServiceResource::collection($service->where('id', $request->id)->get());
    }
}
