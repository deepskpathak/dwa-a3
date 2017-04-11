<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public index

    public function __invoke()
    {
        // send the welcome view
        return view('welcome')->with([
            'value' => null
        ]);
    }

    // Handler for the form
    // params - GET request Params
    // return - success or error message
    public function splitter(Request $request) {
        $value = 34;
        $amountToSplit = $request->input('amountToSplit');
        $numberToSplit = $request->input('numberToSplit');
        $roundUp =  $request->has('roundUp');

        $compute = $amountToSplit / $numberToSplit;

        if($roundUp) {
            $compute = round($compute);
        }

        return view('welcome')->with([
            'value' => $compute
        ]);
    }
}
