<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $r = $request->all();
        foreach ( $r as $key => $value ) {
            
            $data = $key;
        }

        $artist = User::where('id', Auth::user()->id)->first();
        if($data == Auth::user()->id){
            if (!$artist->cv || !$artist->image || !$artist->phone) {
    
                return view('admin.users.create', compact('artist'));
            } else {
                return redirect()->route('admin.home', compact('artist'))->with('Profilo già creato');
            }

        }else{
            return redirect()->route('admin.home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $data = $request->all();
        $artist = User::where('id', Auth::user()->id)->first();
        $request->validate(
            [
                'phone' => 'nullable|min:2',
                'image' => 'nullable|mimes:png,jpg,jpeg,svg|max:4096',
                'cv' => 'nullable|mimes:pdf|max:4096',
            ]);

            if (array_key_exists('phone', $data)) {
                $artist->phone = $data['phone'];
            }
            if (array_key_exists('image', $data)) {
                $img_path = Storage::disk('public')->put('images', $request->file('image'));
                $data['image'] = $img_path;
                $artist->image = $img_path;
            }
            if (array_key_exists('cv', $data)) {
                $cv_path = Storage::disk('public')->put('cvs', $request->file('cv'));
                $data['cv'] = $cv_path;
                $artist->cv = $cv_path;
            }
        $artist->save();
        return redirect()->route('admin.home', $artist);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $artist = User::where('id', Auth::user()->id)->first();
        return view('admin.users.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($artist)
    {
        $data = $artist;
        
        $artist = User::where('id', Auth::user()->id)->first();

        if($data == Auth::user()->id ){
            return view('admin.users.edit', compact('artist'));

        }else{
            return redirect()->route('admin.home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
    
        $artist = User::where('id', Auth::user()->id)->first();
        $request->validate(
        [
            'name' => 'required|string|max:100',
            'surname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|max:100|email',
            'phone' => 'required|min:2',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg|max:4096',
            'cv' => 'nullable|mimes:pdf|max:4096',
        ]);

        if (array_key_exists('image', $data)) {
            if ($artist->image) {
                Storage::delete($artist->image);
            }
            $img_path = Storage::disk('public')->put('images', $request->file('image'));
            $data['image'] = $img_path;
            $artist->image = $img_path;
        }
        if (array_key_exists('cv', $data)) {
            if ($artist->cv) {
                Storage::delete($artist->cv);
            }
            $img_path = Storage::disk('public')->put('cvs', $request->file('cv'));
            $data['cv'] = $img_path;
            $artist->cv = $img_path;
        }

        $artist->update($data);
        return redirect()->route('admin.home', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $artist = User::where('id', Auth::user()->id)->first();
        $img = $artist->image;
        $cv = $artist->cv;
        $artist->delete();
        if($img && Storage::exists($img)){

            Storage::delete($img);
        }
        if($cv && Storage::exists($cv)){

            Storage::delete($cv);
        }
        return redirect('/');
    }
}
