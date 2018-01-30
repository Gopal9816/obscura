<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class GameController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $level = $user->level;

        $levelsList = array(
            1 => 'levels.level1',
            2 => 'levels.level2',
            3 => 'levels.teaser'
        );

        $currentLevel = $levelsList[$level];
        return view($currentLevel)->with('user',$user);
    }

    public function pill(){
        $user = Auth::user();

        return view('levels.redpill')->with('user',$user);
    }

    public function teaser(){
        return view('levels.teaser');
    }

    public function answer(Request $request)
    {
        # code...
        $user = Auth::user();
        $answer = $request->input('answer');
        $answerList = array(
            1 => 'wachowski',
            2 => 'dodo',
        );
        $level = $user->level;
        $correctAns = $answerList[$level];
        if(stripos($answer,$correctAns) !== false){
            $user->level += 1;
            $num = User::where('level',$user->level)->count();
            if($num == 0)
                $user->points += 500;
            elseif($num == 1)
                $user->points += 300;
            elseif($num == 2)             
                $user->points += 150;
            else
                $user->points += 75;
            $user->save();
            return redirect('/game');
        }
        else
            return redirect('/game/red');
    }

    
}
