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
        $posts = Post::orderBy('created_at', 'desc')->limit(50)->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = User::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('image'));
        // $img_path = Storage::put('images',$request->file('image'));

        $params = $request->validate([
            'title' => 'required|max:20|min:5',
            'content' => 'required|max:100|min:5',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg|max:4096',
            'slug' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id'
        ]);

        $params['slug'] = Post::getUniqueSlugFrom($params['title']);

        
        if (array_key_exists('image', $params)) {
            $img_path = Storage::disk('public')->put('images', $params['image']);
            $params['image'] = $img_path;
            $post->image = $img_path;
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
        // $post->load('category');
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
        return view('admin.posts.edit', compact('categories', 'post'));
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

        $params = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg|max:4096',
            'slug' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id'
        ]);


        
        if($params['title'] !== $post->title) {
            $params['slug'] = Post::getUniqueSlugFrom($params['title']);
        }
        
        $post->update($params);
        
        // if (array_key_exists('image', $params)) {
        //     if ($post->image) {
        //         Storage::delete($post->image);
        //     }
            
        //     $img_path = Storage::disk('public')->put('images', $request->file('image'));
        //     $params['image'] = $img_path;
        //     $post->image = $img_path;
        // }
        
        // if (array_key_exists('cv', $data)) {
        //     if ($artist->cv) {
        //         Storage::delete($artist->cv);
        //     }
        //     $img_path = Storage::disk('public')->put('cvs', $request->file('cv'));
        //     $data['cv'] = $img_path;
        //     $artist->cv = $img_path;
        // }
        

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
        $img = $post->image;

        $post->delete();

        if($img && Storage::disk('images')->exists($img)) {
            Storage::disk('images')->delete($img);
        }

        return redirect()->route('admin.posts.index');
    }
}
