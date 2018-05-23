<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function index(){
        return redirect()->route('admin.login.form');
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }

    // Logout method with guard logout for admin only
   public function logout(Request $request)
   {
     
       $this->guard()->logout();

       $request->session()->invalidate();

       return redirect('/');
   }
    
    // defining auth  guard
    protected function guard()
    {
        return Auth::guard('admin');
    }
}