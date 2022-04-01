<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     public function __construct(HasherContract $hasher)
    {
        $this->hasher = $hasher;
    }
    
     public function showResetForm(Request $request, $token = null)
    {
        $password_reset = DB::table("password_resets")->where('email', $request->email)->first();

        if($password_reset && $token && $request->email && !$this->tokenExpired($password_reset->created_at) && $this->hasher->check($token, $password_reset->token) ) {
            return view('auth.passwords.reset')->with(['token' => $token, 'email' => $request->email]);
        }

        return redirect()->route('passwords.expired');
    }
    protected function tokenExpired($createdAt)
    {
        return Carbon::parse($createdAt)->addMinutes(config('auth.passwords.users.reset'))->isPast();
    }
     * 
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function reset()
    {
        return view('auth.passwords.reset');
    }
}