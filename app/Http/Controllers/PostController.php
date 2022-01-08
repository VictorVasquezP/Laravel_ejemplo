<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]); 

        $post = new Post();
        $image = new Image();
        try {
            DB::transaction(function () use ($request, $post, $image) {
                $post->name = $request->name;
                $post->slug = Str::slug($request->name);
                $post->body = $request->body;
                $post->category_id = $request->category_id;
                $post->user_id = session()->get('usuario')->id;
                $post->created_at = now();
                $post->save();
                $file = $request->file('image');
                Storage::disk('public')->put('posts' . '/' . $file->getClientOriginalName(), File::get($file));
                $image->url = 'posts' . '/' . $file->getClientOriginalName();
                $image->imageable_id = $post->id;
                $image->imageable_type = Post::class;
                $image->save();
            });
        } catch (\Exception $ex) {
            return "error";
        }

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $image = Image::where('imageable_type',Post::class)->where('imageable_id',$post->id)->first();
        return view('posts.show', compact('post','image'));
    }

    public function edit(Post $post)
    {
        //return $post;
        $image = Image::where('imageable_type',Post::class)->where('imageable_id',$post->id)->first();
        $categories = Category::all();
        return view('posts.edit',compact('post','categories','image'));
    }

    public function update(Post $post, Request $request)
    {
        
        $post->name = $request->name;
        $post->slug = Str::slug($request->name);
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->save();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = Image::where('imageable_type',Post::class)->where('imageable_id',$post->id)->first();
            Storage::disk('public')->put('posts' . '/' . $file->getClientOriginalName(), File::get($file));
            $image->url = 'posts' . '/' . $file->getClientOriginalName();
            $image->save();
        }
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
