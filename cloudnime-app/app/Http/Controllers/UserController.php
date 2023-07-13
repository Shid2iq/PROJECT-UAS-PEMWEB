<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $User = User::all();
        return view('User.index', compact('Users'));
    }

    // public function index(){
    //     $countries = countries::all();
    //     return view('countries.index', compact('countries'));
    // }
}
