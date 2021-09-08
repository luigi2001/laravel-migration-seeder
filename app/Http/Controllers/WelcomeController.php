<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class WelcomeController extends Controller
{
    public function index() {
        $trips = Trip::paginate(5);
        return view('welcome',compact('trips'));
    }
}
