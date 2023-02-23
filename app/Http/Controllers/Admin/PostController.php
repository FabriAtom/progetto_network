<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
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

        $params = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        // piccolo algoritmo che andrà a trovarsi in maniera itereattiva un nuovo slug utilizzando un contatore finche non troverà un post

        // dd($request->all());
        $slug_base = Str::slug($params['title']);
        $slug =  $slug_base;

        // controllare che sia unico 
        $post_esistente = Post::where('slug', $slug)->first();
        $counter = 1;

        while ($post_esistente) {

            $slug = $slug_base . '-' . $counter;
            
            $post_esistente = Post::where('slug', $slug)->first();
            $counter++;
        };

        // dd($slug);
        
        $params['slug'] = $slug;

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
        // $categories = Category::orderBy('name','asc')->get();
        // return view('admin.posts.create', compact('categories'));
        // dd($request->all());
        $params = $request->validate([
            'title' => 'required|max:255|min:5',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);



    //     if($params['title'] =! $post->title) {
    //         // rigenerare lo slug
    //         $slug_base = Str::slug($params['title']);
    //         $slug = $slug_base;
    //         $post_esistente = Post::where('slug', $slug)->first();
    //         $counter = 1;
    
    //         while ($post_esistente) {
    
    //             $slug = $slug_base . '-' . $counter;
                
    //             $post_esistente = Post::where('slug', $slug)->first();
    //             $counter++;
    //         }

    //         $params['slug'] = $slug;
    //     }

    //     $post->update($params);

    //      return redirect()->route('admin.posts.show',$post);
        
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
