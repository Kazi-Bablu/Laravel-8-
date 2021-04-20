<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::view("users", "users");
Route::view("about", "about");

//Route::get("users",[UsersController::class,'loadView']);
Route::post("users", [UsersController::class, 'getData']);
Route::get("database", [UsersController::class, 'index']);
Route::get("getUserData", [UsersController::class, 'getUserData']);
Route::view("login", "users.users");

Route::group(['middleware' => ['protectPage']],function(){
    Route::view('users1', 'users.users');
});

Route::view('home', 'home')->middleware('agaValidate');
Route::view('noaccess', 'noaccess');
