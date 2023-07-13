<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = review::all();
        return view('reviews.create', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData =$request->validate([
            'movies_id' => 'required',
            'users_id' => 'required',
            'date' => 'required | date',
            'description' => 'required',
            'rating' => 'required',
        ]);

        review::create($validateData);
        return redirect('/reviews')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(review $review)
    {
        return view('reviews/edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, review $review)
    {
        $validateData = $request -> validate([
            'movies_id' => 'required',
            'users_id' => 'required',
            'date' => 'required | date',
            'description' => 'required',
            'rating' => 'required',
        ]);

        $review->update($validateData);
        return redirect('/reviews') -> with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(review $review)
    {
        $review -> delete();
        return redirect('/reviews')->with('success', 'Data berhasil di hapus');
    }
}
