<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Fetch authenticated user data
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'role' => 'required|array|min:1',
        ]);

        $user = Auth::user();
        $user->role = implode(',', $request->role); // Save roles as a comma-separated string
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
