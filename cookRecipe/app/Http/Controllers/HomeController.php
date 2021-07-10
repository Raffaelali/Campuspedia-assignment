<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('landingPage', compact('recipes'));
    }
}
