<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home')->with('user',$user);
    }

    public function edit(){
        $user = Auth::user();
        return view('auth.edit')->with('user',$user);
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'college' => 'required',
            'phno' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->college = $request->input('college');
        $user->phnumber = $request->input('phno');

        $user->save();
        
        return redirect('/home');
    }
}
