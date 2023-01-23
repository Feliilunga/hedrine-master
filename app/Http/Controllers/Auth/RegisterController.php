<?php

namespace App\Http\Controllers\Auth;
use illuminate\http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUser;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'tel1' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha'
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
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'team' => $data['team'],
            'tel1' => $data['tel1'],
            'RGPD' => $data['RGPD'],
            //DD: 04/01/2023 si on ne coche pas la checkbox, la donnée n'est pas envoyée au serveur, il y a donc une erreur, d'où l'importance du isset 
            'societe' => isset($data['societe']) ? 1 : 0 

        ]);
        
    }

    protected function showRegistrationForm()
    {
        $users = DB::table('users')->get();
        


        return view("auth/register", compact('users'));
    }
    // Verification si il existe déjà un mail dans la DB lors de l'inscription
    public function verifyMail(Request $request){
        $userMail = $_POST['userMail'];
       
        $result = DB::table('users')->where('email', $userMail)->pluck('email');
       
        if (isset($result[0])) {
            echo 1;
            
        }
        else
        {
            echo 0;
            // echo $result;
        }

       
    }
}
