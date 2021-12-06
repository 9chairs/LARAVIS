<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::with(['planets' => function($query) {
            $query->orderBy('age', 'desc');
        }])->get();
        return view('space.universes', ['universes' => $universes]);
    }

    public function show(Universe $universe)
    {
        $universe->load('planets');
        return view('space.universe', ['universe' => $universe]);
    }
}
