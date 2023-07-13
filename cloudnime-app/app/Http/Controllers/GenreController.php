<?php

namespace App\Http\Controllers;

use App\Models\genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = genre::all();
        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = genre::all();
        return view('genres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        genre::create($validatedData);
        return redirect('/genres')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genre $genre)
    {
        $validatedData = $request -> validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $genre -> update($validatedData);
        return redirect('/genres') -> with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        $genre -> delete();
        return redirect('/genres')->with('success', 'Data berhasil di hapus');
    }
}
