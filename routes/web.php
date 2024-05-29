<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraUserController;
use App\Http\Controllers\AuthController;

   
      
               Route::get('/welcome', function () {
               return view('welcome'); 
               })->name('welcome');


        Route::get('/',function() {
        return view ('login');
        })->name('loginroute');

        Route::get('/register', function (){
            return view('register');
          })->name('registerroute');
          Auth::routes();
          
          Route::resource('users',LaraUserController::class);
            //Define the Post route for login 
          Route::post('/login', [AuthController::class, 'login']);

          Route::resource('larausers', LaraUserController::class);






     





