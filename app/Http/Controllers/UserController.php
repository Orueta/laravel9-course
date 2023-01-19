<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function generatePDF()
    {
        $users = User::all();
        $pdf = Pdf::loadView('users.index', compact('users'));
        return $pdf-> download('users.pdf');
    }

}
