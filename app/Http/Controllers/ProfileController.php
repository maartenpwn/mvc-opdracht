<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // Logged in user
        $user_id = Auth::id();

        $exercises = Exercise::all()->where('user_id', $user_id);
        return view('profile', compact('exercises'));
    }
}
