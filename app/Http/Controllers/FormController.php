<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Handler for the form
    // params - GET request Params
    // return - success or error message
    public function splitter(Request $request) {
        $value = null;
        $amountToSplit = $request->input('amountToSplit');
        $numberToSplit = $request->input('numberToSplit');
        $roundUp =  $request->has('roundUp');

        dump($amountToSplit);
        dump($numberToSplit);
        dump($roundUp);


        /*return view('welcome')->with([
            'value' => $value
        ]);*/
    }

}
