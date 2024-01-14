<?php

namespace App\Http\Controllers;

use App\Models\photos;
use App\Models\videos;
use Illuminate\Http\Request;

class photosvideosController extends Controller
{
    public function index()
    {
        $photos = photos::all();
        $videos = videos::all();

        return view('photosvideos.index', compact('photos', 'videos'));
    }
}
