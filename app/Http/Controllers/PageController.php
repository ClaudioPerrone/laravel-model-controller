<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        //dd('ciao ciao');
        $movies = Movie::all();
        //dd($movies);

        $data = [
            'movies' => $movies
        ];

        return view('home', $data);
    }
}