<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        # code...
        return view('pages.index');
    }

    public function leaderboard()
    {
        # code...
        $homeusers = User::where('college','=','CET')->orderBy('points','DESC')->orderBy('updated_at','ASC')->get();
        $awayusers = User::where('college','!=','CET')->orderBy('points','DESC')->orderBy('updated_at','ASC')->get();

        return view('pages.leaderboard', array('homeusers' => $homeusers,'awayusers' => $awayusers));
    }

    public function rules()
    {
        return view('pages.rules');
    }
}
