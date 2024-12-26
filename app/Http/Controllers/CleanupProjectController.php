<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CleanupProject;

class CleanupProjectController extends Controller
{
    public function index()
    {
        $projects = CleanupProject::all();
        return view('impact', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_event' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'image_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('projects', 'public');

        CleanupProject::create([
            'name_event' => $request->name_event,
            'location' => $request->location,
            'date' => $request->date,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Project added successfully!');
    }
}
