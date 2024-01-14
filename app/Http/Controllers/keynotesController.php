<?php

namespace App\Http\Controllers;

use App\Models\keynotes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class keynotesController extends Controller
{
    public function index()
    {
        $keynotes = Keynotes::all();
        return response()->view('keynotes.index', compact('keynotes'));
    }
}
