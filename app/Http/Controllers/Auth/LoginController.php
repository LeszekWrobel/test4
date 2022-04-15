<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Post;

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
    protected $redirectTo = RouteServiceProvider::HOME; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->middleware('guest')->except('logout')->redirect()->route('login');
       //return redirect('/home');
        
    }
  /*
    public function logout()
    {
         $posts = Post::all();
        return view('posts.index', compact('posts'));
       return view('welcome');
    }
  */ 

  /*
    public function login()
    {
        $posts = Post::all();
        return view('posts.userPosts', compact('posts'));
       
    }
  */
}
