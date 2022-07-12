<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        if (session('userSession')) {
            return view('home');
        }

        return redirect('/');
    }
}
