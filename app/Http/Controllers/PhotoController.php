<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {

        $photos = Storage::disk('public')->files('photos/');
        return view('home', ['photos' =>  $photos]);
    }
}
