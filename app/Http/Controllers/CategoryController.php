<?php

namespace App\Http\Controllers;

use App\Events\CategoryPosted;
use App\Helper\DeleteOldFile;
use App\Helper\StoreFile;
use App\Http\Requests\StoreCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index', [
            'categories' => Category::paginate(),
            'meta_title' => __('Categories'),
        ]);
    }

    public function create()
    {
        $childrens = Category::whereNull('parent_id')->get();
        $category = null;
        return view('categories.create', ['meta_title' => __('Add Category'), 'childrens' => $childrens, 'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $validateData = $request->validated();
        if ($request->hasFile('image')) {
            unset($validateData['image']);
            $imageName = StoreFile::save($request->image, 'category');
            $validateData['image'] = $imageName;
        }
        $category = Category::create($validateData);

        event(new CategoryPosted($category));

        $request->session()->flash('status', 'Category was created!');

        return redirect()->route('categories.edit', ['category' => $category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.show', [
            'category' => $category,
            'meta_title' => $category->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $childrens = Category::whereNull('parent_id')->get();
        return view('categories.edit', [
            'category' => $category,
            'childrens' => $childrens,
            'meta_title' => __('Update Category')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $category = Category::findOrFail($id);

        $validateData = $request->validated();

        if ($request->hasFile('image')) {
            if (isset($post->image)) {
                DeleteOldFile::delete($post->image);
            }
            $imageName = StoreFile::save($request->image, 'category');
            $validateData['image'] = $imageName;
        }

        $category->fill($validateData);

        $category->save();

        $request->session()->flash('status', __('Category was Updated'));

        return redirect()->route('categories.edit', ['category' => $category->id]);
    }
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        $request->session()->flash('status', __('Category was deleted!'));
        return redirect()->route('categories.index');
    }

}
