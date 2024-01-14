<?php

namespace App\Http\Controllers;

use App\Models\sponsors;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class sponsorsController extends Controller
{
    public function index()
    {
        $sponsors = sponsors::all();
        return response()->view('sponsors.index', compact('sponsors'));
    }
}
