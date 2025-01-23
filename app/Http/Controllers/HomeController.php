<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sections = LandingPage::all();
        return view('home', compact('sections'));
    }
}
