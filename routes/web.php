<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KellyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
    return view('pages.home');    
});

Route::get('/home' , [KellyController::class,'index']);

Route::get('/about-us' , [KellyController::class,'about_us']);

Route::get('/resume', [KellyController::class,'resume']);

Route::get('/services' , [KellyController::class, 'services']);

Route::get('/portfolio' , [KellyController::class,'portfolio'] );

Route::get('/contact-us' , [KellyController::class,'contact_us']);






