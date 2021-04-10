<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        $user = Auth::user('name');
        return view('about', compact('user'));
    }
}
