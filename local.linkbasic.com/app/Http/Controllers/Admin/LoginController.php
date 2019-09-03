<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\LoginController AS Controller;
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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/add';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    // protected function credentials(Request $request)
    // {
    //     return array_merge($request->only($this->username(), 'password'), ['is_admin' => 1]);
    // }
    protected function credentials(Request $request)
    {
        return array_merge(parent::credentials($request), ['is_admin' => 1]);
    }

     protected function validateLogin(Request $request)
    {
        
    }
}

// <?php

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Auth\LoginController AS Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Http\Request;

// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */

//     // use AuthenticatesUsers;

//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/admin/add-product';
    
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     // public function __construct()
//     // {
//     //     $this->middleware('guest')->except('logout');
//     // }

//     /**
//      * Get the needed authorization credentials from the request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return array
//      */
//     protected function credentials(Request $request)
//     {
//         return array_merge(parent::credentials($request), ['is_admin' => 1]);
//     }

//     /**
//      * Show the application's login form.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function showLoginForm()
//     {

//         return view('admin.login');
//     }

//     protected function validateLogin(Request $request)
//     {
        
//     }
// }


