<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Storage;


class RegisterNewController extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {   
        /*if(!auth()->guest){
            return redirect('/home');
        }
        else*/
        try{

            $socialUser = Socialite::driver($provider)->user();

        }
        catch(\Exception $e){
            return redirect('/')->with('error',$e->getMessage());
        }

        $user = user::where('email',$socialUser->getEmail())->first();

        if(!$user){
            $user = new User;
            $user->email = $socialUser->getEmail();
            $user->name = $socialUser->getName();
            $user->level = 1;
            $user->college = '';
            $user->phnumber = '';
            $user->provider_id = $socialUser->getId();
            $user->provider = $provider;
            $user->points = 0;
            $user->save();
            return view('auth.registerNew')->with('id',$socialUser->getId());
        }else if($user->provider != $provider){
            return redirect('/')->with('error','There is already an account registered with this e-mail');
        }else
        auth()->login($user);

        return redirect('/home');
        
        // $user->token;
    }
    public function store(Request $request, $id)
    {
        //
        $this->validate($request, [
            'phno' => 'required',
        ]);

        $user = User::where('provider_id',$id)->first();
        if($request->input('college') == 'home')
            $user->college = "CET";
        else
            $user->college = $request->input('collegename');
        $user->phnumber = $request->input('phno');
        $user->save();
        auth()->login($user);

        return redirect('/home');
    }
}

