<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Invoke se usa cuando queremos que el controllador administre una ruta unica
    public function __invoke()
    {
        // return view('welcome');
        return view('home');
    }
}
