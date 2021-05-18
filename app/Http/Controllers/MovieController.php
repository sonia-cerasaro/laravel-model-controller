<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
      $movies = Movie::all();
      $title_page = 'Movies';
      return view('movies', compact('movies'))->with('title_page', $title_page);
    }
}
