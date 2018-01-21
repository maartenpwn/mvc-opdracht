<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class AdminController extends Controller
{
  public function index(Request $request) {
      $exercises = Exercise::all();

      return view('admin.adminPanel', compact('exercises'));
  }
}
