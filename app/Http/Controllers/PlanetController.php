<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('universe')->get();
        return view('space.planets', ['planets' => $planets]);
    }

    public function show(Planet $planet)
    {
        return view('space.planet', ['planet' => $planet]);
    }
}
