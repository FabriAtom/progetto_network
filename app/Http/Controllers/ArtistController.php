<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

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
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
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
        return redirect()->route('artists.show', $artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // metodo find, id non valido return pagina 404
        $artist = Artist::findOrFail($id);

        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
