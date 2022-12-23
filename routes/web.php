<?php

use App\Events\UserRegistration;
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
    return view('welcome');
});

Route::get('/userRegistration', function () {
    return view('userRegistration');
});

Route::post('/userRegistration', function () {
    $name = request()->name;
    event(new UserRegistration($name));
    return back();
});
