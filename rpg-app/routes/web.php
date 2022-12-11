<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Route as RoutingRoute;
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
})->name('/');

Route::post('/characters/{id}',[CharacterController::class,'storeFiltre'])->name('characters.storeFiltre');

Route::controller(LoginController::class)->group(function(){
    
    Route::get('login', 'index')->name('login');
    
    Route::get('registration', 'registration')->name('registration');
    
    Route::get('logout', 'logout')->name('logout');
    
    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
    
    Route::post('validate_login', 'validate_login')->name('sample.validate_login');
    
    Route::get('dashboard', 'dashboard')->name('dashboard');
    
});

Route::resource('users', UserController::class);
Route::resource('characters', CharacterController::class);
Route::resource('groups', GroupController::class);
Route::resource('invitations', InvitationController::class);





