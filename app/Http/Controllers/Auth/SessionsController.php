<?php

namespace App\Http\Controllers\Auth;

use App\Login;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SessionsController extends Controller
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
    protected $redirectTo = '/';
    protected $redirectAfterLogout = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username()
    {
        return 'username';
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (! auth()->attempt(['password' => request('password')])) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        session()->flash('message', 'You are logged in!');

        return redirect()->intended();
    }

    public function destroy()
    {
        dd(auth()->logout());

        session()->flash('message', 'You are logged out!');

        return redirect('/contact');
    }
}
