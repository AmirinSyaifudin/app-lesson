<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Drink;
use App\Food;

class SiteController extends Controller
{
    //
    public function home()
    {
        return view('');
    }

    public function drink()
    {
        return view('sites.drink');
    }

    public function food()
    {
        return view('sites.food');
    }
}