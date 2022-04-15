<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/',function()
      
    {
        $posts = Post::all();
       // return view('index', compact('posts'));
  /*     if($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
      }
 */       // return redirect('login')->withImput()->withErrors([ 'Treść komunikatu']);
       //return view('welcome');
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/posts', 'App\Http\Controllers\PostsController');
