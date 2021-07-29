<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\InfoResource;
use App\Models\About;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InfoController extends Controller
{
    public function show(Info $info){
        return new InfoResource($info->first());
    }
}
