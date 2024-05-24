<?php
 //Import Area 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enemycontroller;
use App\Http\Controllers\Citycontroller;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\Bikecontroller;
use App\Http\Controllers\Birdscontroller;
use App\Http\Controllers\NewsController;
Route::get('/', function () {
    return view('welcome');  
});
    Route::get('/product', function () {
    return view('product'); 
    });
     Route::get('/search', function () {
    return view('search');  
});

Route::get('/Nothing01',[Enemycontroller::class,'Nothing01']);
    
Route::prefix('mp')->group(function () {
    Route::get('/Indore', function () {
                                        /* Matches The "/admin/users" URL*/
        return view('mp.Indore');
    });
    Route::get('/Bhopal', function () {
        
        return view('mp.Bhopal');
    });
    Route::get('/Neemuch', function () {
        return 'Hello from bhopal route';
    });
});
       //scope resolution operators
       Route::get('/mybikes',[Bikecontroller::class,'index']);
        
   
        Route::resource('laptops', LaptopController::class);

        
        Route::resource('news',NewsController::class);
  
  
  
     
        //lets in the button call the welcome.blade.php function through resources
      Route::get('/', function ()   {
      return view('welcome');
     });
    
     Route::get('/Second', function ()   {
        return view('rewelcome');
       });
      
       Route::get('/Backend', function ()   {
        return view('details');
       });
      
       Route::get('/',function() {
        return view ('login');
       })->name('loginroute');
  
        Route::get('/register', function (){
            return view('register');
        })->name('registerroute');
                  //get Accessed all the route 
        Route::resource('user',LaraUserController::class);

            // define the LarUserController to make the value output resources
            
        
        

   






