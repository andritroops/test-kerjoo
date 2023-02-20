<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testGridController extends Controller
{
    public function index()
    {
        return view('test-grid');
    }
}