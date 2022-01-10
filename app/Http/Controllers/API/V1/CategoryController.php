<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category, Request $request){
        $perPage = $request->get('per_page', 15);
        return CategoryResource::collection($category->whereNull('parent_id')->orderBy('id', 'desc')->paginate($perPage)
            ->appends([
                'per_page' => $perPage
            ])
        );
    }
    public function show(Request $request, $id){
        $perPage = $request->get('per_page', 15);
        return CategoryResource::collection(Category::where('parent_id', $id)->orderBy('id', 'desc')->paginate($perPage)
            ->appends([
                'per_page' => $perPage
            ])
        );
    }
}
