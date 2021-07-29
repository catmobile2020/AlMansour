<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\Language;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news, Request $request){
        $perPage = $request->get('per_page', 15);
        $lang = Language::find($request->lang);
        if (!isset($lang)){
            return response()->json([
                'status' => 404,
                'message' => 'This Language not found!',
            ], '404');
        }
        return NewsResource::collection($news->where('language_id', '1')->orderBy('id', 'desc')->paginate($perPage)
            ->appends([
                'per_page' => $perPage
            ])
        );
    }
    public function show(News $news, Request $request){
        return NewsResource::collection($news->where('id', $request->id)->get());
    }
}
