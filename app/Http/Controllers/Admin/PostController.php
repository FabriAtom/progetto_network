<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::limit(50)->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.posts.create', compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg|max:4096',
            'slug' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id'

        ]);

        $params['slug'] = Post::getUniqueSlugFrom($params['title']);

        if (array_key_exists('image', $params)) {
            $img_path = Storage::disk('images')->put('post_cover', $params['image']);
            $params['cover'] = $img_path;
        }

        $post = Post::create($params);

        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.posts.edit', compact('categories','post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->file('image'));
        // $categories = Category::orderBy('name','asc')->get();
        // return view('admin.posts.create', compact('categories'));
        // dd($request->all());
        $params = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'image' => 'required',
            'slug' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id'
        ]);

        if($params['title'] !== $post->title) {

            $params['slug'] = Post::getUniqueSlugFrom($params['title']);
        }

        $post->update($params);

         return redirect()->route('admin.posts.show', $post);
        
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
