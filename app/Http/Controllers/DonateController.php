<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        // Update to load the correct view file
        return view('donate'); 
    }

    public function submit(Request $request)
    {
        $amount = $request->input('amount');
        return view('donate.result', compact('amount'));
    }
}


