<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recuperiamo gli artisti
        $artists = Artist::all();

        // ritorniamo la vista index passandogli i dati
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $params = $request->all();

        $params = $request->validate([
            'name' => 'required|max:100',
            'surname' => 'required|max:255',
            'email' => 'required|max:100|email',
            'address' => 'required|max:255',
            'category' => 'required|max:100',
            'phone' => 'required|max:50',
            'image' => 'nullable',
            'cv' => 'nullable'
        ]);

        // validare i dati che arrivano dalla request
        $artist = Artist::create($params);

        // passiamo il model, recupera la PK e la usa come parametro
        return redirect()->route('admin.artists.show', $artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        // metodo find, id non valido return pagina 404
        // $artist = Artist::findOrFail($id);

        return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        // dd($artist);

        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        // dd($request->all());
        // $artist = Artist::findOrFail($id);

        $params = $request->validate([
            'name' => 'required|max:100',
            'surname' => 'required|max:255',
            'email' => 'required|max:100|email',
            'address' => 'required|max:255',
            'category' => 'required|max:100',
            'phone' => 'required|max:50',
            'image' => 'nullable',
            'cv' => 'nullable'
        ]);

        $artist->update($params);

        return redirect()->route('admin.artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        // $artist = Artist::findOrFail($id);

        $artist->delete();
        
        return redirect()->route('admin.artists.index');
    }
}
