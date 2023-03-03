<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            // dd($key);
        }
        // $data = $doctor;

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
        return view('admin.users.show');
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
            'category' => 'required|min:1|max:50',
            'phone' => 'required|min:2',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg|max:4096',
            'cv' => 'nullable|mimes:pdf|max:4096'
        ]);

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
        $doctor->delete();
        return redirect('/');
    }
}
