<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Gate;


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

Route::get('/', function(){	
	return redirect('/login');
});

Route::get('home', [PagesController::class, 'home']);

Route::prefix('home')->middleware('auth')->name('home/')->group(function(){
	Route::get('/about', [PagesController::class, 'about']);
	Route::resource('/student', StudentController::class);
});