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
            0 => 'levels.blocked',
            1 => 'levels.level1',
            2 => 'levels.level2',
            3 => 'levels.jabberwocky',
            4 => 'levels.sisgy',
            5 => 'levels.fall',
            6 => 'levels.kudu',
            7 => 'levels.smith',
            8 => 'levels.teaser',

        );

        $currentLevel = $levelsList[$level];
        return view($currentLevel)->with('user',$user);
    }

    public function pill(){
        $user = Auth::user();
        if($user->level == 1)
            return view('levels.redpill')->with('user',$user);
        else
            return redirect('/game');
    }

    public function teaser(){
        return view('levels.wrong');
    }

    public function answer(Request $request)
    {
        # code...
        $user = Auth::user();
        $answer = $request->input('answer');
        $answerList = array(
            1 => 'wachowski',
            2 => 'caucusrace',
            3 => 'tumtum',
            4 => 'syzygy',
            5 => 'alicepleasanceliddell',
            6 => 'waltdisney',
            7 => 'smithandbeck',
        );
        $level = $user->level;
        $correctAns = $answerList[$level];
        if(stripos($answer,$correctAns) !== false){
            $user->level += 1;
            $num = User::where('level',$user->level)->count();
            if($num <= 4)
                $user->points += 500;
            else if($num <= 9)
                $user->points += 300;
            else if($num <= 19)             
                $user->points += 150;
            else
                $user->points += 75;
            $user->save();
            return redirect('/game');
        }
        else
            return view('levels.wrong');
    }

    
}
