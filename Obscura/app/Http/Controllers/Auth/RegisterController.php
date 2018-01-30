<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\SocialProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;
use Socialite;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
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
            return redirect('/');
        }

        $user = user::where('email',$socialUser->getEmail())->first();

        if(!$user){
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()],
                ['provider_id' => $socialUser->getId()],
                ['provider' => $provider]
            );
            return view('auth.registerNew')->with('id',$socialUser->getId());
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
            'college' => 'required',
        ]);

        $user = User::where('provider_id',$id);
        $user->college = $request->input('college');
        $user->phnumber = $request->input('phno');
        $array = (array) $user;
        $user->update($array);
        DB::update('update users set college = $user->college, phnumber = $user')
        return redirect('/home');

    }
}
