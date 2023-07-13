<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function list()
    {
        $movies = Movie::all();
        return view('page/list', compact('movies'));
    }

    public function detail()
    {
        $movies = Movie::all();
        return view('page/detail', compact('movies'));
    }

    public function detail2()
    {
        $movies = Movie::all();
        return view('page/detail2', compact('movies'));
    }

    public function detail3()
    {
        $movies = Movie::all();
        return view('page/detail3', compact('movies'));
    }

    public function about()
    {
        $movies = Movie::all();
        return view('page/about', compact('movies'));
    }

    public function contact()
    {
        $movies = Movie::all();
        return view('page/contact', compact('movies'));
    }
}