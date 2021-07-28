<?php

namespace App\Http\Controllers;

use App\Events\PostPosted;
use App\Helper\DeleteOldFile;
use App\Helper\StoreFile;
use App\Http\Requests\StorePost;
use App\Models\Language;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'create', 'store', 'edit', 'destroy', 'restore'
        ]);
    }

    public function index()
    {
        return view('posts.index', [
            'posts' => News::paginate(),
            'meta_title' => __('Posts'),
        ]);
    }

    public function show($id)
    {
        $post = News::findOrFail($id);

        if (Storage::exists($post->image)) {
            $post['image'] = asset(Storage::url($post->image));
        } else {
            $post['image'] = asset('img/default_image.png');
        }

        return view('posts.show', [
            'post' => $post,
            'meta_title' => $post->title,
        ]);
    }

    public function create()
    {
        $languages = Language::all();
        return view('posts.create', [
            'languages' => $languages,
            'meta_title' => __('Add News')
        ]);
    }

    public function store(StorePost $request)
    {
        $validateData = $request->validated();
        $validateData['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            unset($validateData['image']);
            $imageName = StoreFile::save($request->image, 'posts');
            $validateData['image'] = $imageName;
        }

        $post = News::create($validateData);
        event(new PostPosted($post));

        $request->session()->flash('status', 'News was created!');

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function edit($id)
    {
        $post = News::findOrFail($id);
        $languages = Language::all();
        return view('posts.edit', [
            'post' => $post,
            'languages' => $languages,
            'meta_title' => __('Update News')
        ]);
    }

    public function update(StorePost $request, $id)
    {
        $post = News::findOrFail($id);

        $validateData = $request->validated();

        if ($request->hasFile('image')) {
            if (isset($post->photo)) {
                DeleteOldFile::delete($post->photo);
            }
            $imageName = StoreFile::save($request->image, 'posts');
            $validateData['image'] = $imageName;
        }

        $post->fill($validateData);
        $post->save();
        $request->session()->flash('status', __('News was updeted'));

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Request $request, $id)
    {
        $post = News::findOrFail($id);

        $post->delete();

        $request->session()->flash('status', __('News was deleted!'));
        return redirect()->route('posts.index');
    }
}
