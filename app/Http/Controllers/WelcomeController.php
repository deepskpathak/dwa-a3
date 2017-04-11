<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public index

    public function __invoke()
    {
        // send the welcome view with null results as we are using same single page
        return view('welcome')->with([
            'value' => null
        ]);
    }

    // Handler for the form
    // params - GET request Params
    // return - success or error message
    public function splitter(Request $request) {

        # Validate the request data
        $this->validate($request, [
            'amountToSplit' => 'required|numeric',
            'numberToSplit' => 'required|numeric',

        ]);

        $value = null; // initialize the return
        $amountToSplit = $request->input('amountToSplit');
        $numberToSplit = $request->input('numberToSplit');
        $roundUp =  $request->has('roundUp');

        $compute = $amountToSplit / $numberToSplit;

        if($roundUp && $roundUp == 'true') {
            $compute = round($compute);
        }

        return view('welcome')->with([
            'value' => $compute,
        ]);
    }
}
