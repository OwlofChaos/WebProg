<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonateController extends Controller
{
    public function index()
    {
        $totalDonations = Donation::sum('amount');
        return view('donate', compact('totalDonations'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        Donation::create(['amount' => $request->input('amount')]);

        $amount = $request->input('amount');
        return view('donate.result', compact('amount'));
    }
}