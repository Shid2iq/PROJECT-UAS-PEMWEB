<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request -> validate([
            'title' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required|date',
            'countries_id' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        if($request -> hasFile('poster')){
            // set image name
            $extension = $request -> file('poster') -> getClientOriginalExtension();
            $imageName = time() .'.'. $extension;

            // store to storage
            $request -> file('poster') -> storeAs('assets/img', $imageName, 'public');
            $validateDsata['poster'] = $imageName;

        }

        Movie::create($validateData);
        return redirect('/movies')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
    
        if($request -> hasFile('poster')){
            // delete old image
            Storage::disk('public') ->delete('assets/img/' . $movie -> poster);

            // set image name
            $extension = $request -> file('poster') -> getClientOriginalExtension();
            $imageName = time() .'.'. $extension;

            // store to storage
            $request -> file('poster') -> storeAs('assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }

        $movie->update($validatedData);
        return redirect('/movies')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie -> delete();
        return redirect('/movies')->with('success', 'Data berhasil di hapus');
    }
}
