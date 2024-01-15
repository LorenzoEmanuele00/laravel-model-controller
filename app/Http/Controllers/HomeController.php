<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $books = Movie::all();
        dd($books);
        return view ('home');
    }
}
