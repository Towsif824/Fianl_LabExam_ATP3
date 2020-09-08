<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeer extends Controller
{
    function index(Request $request){

        $users = Job::all();
        return view('employeer.index', compact('users'));
    }
}
