<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        $donors = Donor::orderBy('total_donation', 'desc')->take(5)->get();
        $volunteers = Volunteer::orderBy('activity_count', 'desc')->take(5)->get();

        return view('project', compact('donors', 'volunteers'));
    }
}

