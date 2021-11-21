<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitoController extends Controller
{
    public function __invoke()
    {
        return view('vitoapp');
    }

    public function getUser(Request $request)
    {
        return $request->user();
    }
}