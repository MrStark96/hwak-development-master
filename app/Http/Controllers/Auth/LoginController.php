<?php
// ===================== Login Controller ========================================
// ======================== 2020.03.05 ===========================================

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    private $is_login = false;

    // constructor
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    // show method
    public function show()
    {
        return view('auth.login');
    }

    // redirect method for social authentication
    public function loginRedirectToProvider()
    {
        $this->is_login = true;

        return Socialite::driver('google')->redirect();
    }

    public function signupRedirectToProvider()
    {
        $this->is_login = false;
        return Socialite::driver('google')->redirect();
    }

    // call back method for social authentication
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        if(explode("@", $user->email)[1] !== 'company.com'){
            // return redirect()->to('/');
        }

        $existingUser = User::where('email', $user->email)->first();

        // login case

        if ($existingUser) {
            auth()->login($existingUser, true);

            return redirect()->to('/');
        } else {
            $newUser                  = new User;
            $newUser->name            = $user->getName();
            $newUser->email           = $user->getEmail();
            $newUser->image           = $user->getAvatar();
            $newUser->provider        = 'google';
            $newUser->provider_id     = $user->getId();

            $newUser->save();
            auth()->login($newUser, true);

            return redirect()->to('/');
        }
    }

    // logout method
    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }
}
