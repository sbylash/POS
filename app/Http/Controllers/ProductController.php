<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view ('product.foodBeverage')
        ->with ('judul','List of Food Beverages');
    }

    public function beautyHealth()
    {
        return view ('product.beautyHealth')
        ->with ('judul','List of Beauty Health');
    }

    public function homeCare()
    {
        return view ('product.homeCare')
        ->with ('judul','List of Home Care');
    }

    public function babyKid()
    {
        return view ('product.babyKid')
        ->with ('judul','List of Baby Kid');
    }
}
