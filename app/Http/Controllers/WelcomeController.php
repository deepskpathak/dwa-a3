<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public index

    public function __invoke()
    {
        // send the welcome view
        return view('welcome');
    }
}
