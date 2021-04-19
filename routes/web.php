<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('auth.login');
});

//Route::post('/', 'LoginController@logout');

//Route::get('/logout', 'LogoutController@do_logout');

//Route::post('/logout', 'LoginController@logout');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/jepang', function () {
    return view('jepang');
});

Route::get('/thailand', function () {
    return view('thailand');
});

Route::get('/china', function () {
    return view('china');
});

Route::get('/home', function () {
    return view('home');
});


Auth::routes();

Route::get('/indonesia', [App\Http\Controllers\HomeController::class, 'index'])->name('indonesia');

