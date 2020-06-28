<?php

namespace App\Http\Controllers;

use Solaris\MoonPhase;

class Debug extends Controller
{
    public function index()
    {
        return view("/debug");
    }
}
