<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function home() {
        return view('home')
        ->with('name','Shasia')
        ->with('role','Point of Sales');
    }
}