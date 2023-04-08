<?php

namespace App\Http\Controllers;
use Illumination\View\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view ('home');
    }
}
