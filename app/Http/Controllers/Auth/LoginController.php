<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated(Request $request, $user){
        if($user->email_verified_at == null)
        {
            Session::flush();
            return abort(403, 'Unverified Account');
        }
        else{
            if($user->suspend ==0)
            {
                if($user->hasRole('administrator')){
                    return redirect('admin');
                }
                if($user->hasRole('user')){
                    return redirect('user');
                }
            }
            else
            {
               
                Session::flush();
                return abort(403, 'Account Suspended');
                
            }
        }
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
