<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [1 => 'Serie 1', 2 => 'Serie 2', 3 => 'Serie 3'];
        return view('series.index')->with('series', $series);
    }
}
