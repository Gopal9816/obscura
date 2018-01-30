<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
        # code...
        return view('pages.index');
    }
}
