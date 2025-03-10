<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('map');
    }

    public function indexWorld()
    {
        return view('worldmap');
    }

    public function indexGeoJson()
    {
        return view('geojson');
    }

    public function indexLayout()
    {
        return view('layout');
    }
}
