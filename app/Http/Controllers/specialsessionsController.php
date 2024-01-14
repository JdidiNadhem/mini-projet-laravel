<?php

namespace App\Http\Controllers;

use App\Models\specialsessions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class specialsessionsController extends Controller
{
    public function index()
    {
        $specialsessions = specialsessions::all();
        return response()->view('specialsessions.index', compact('specialsessions'));
    }
}
