<?php
//Import Area 
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Enemycontroller;
use App\Http\Controller\Citycontroller;
Route::get('/', function () {
    return view('welcome');  
});

Route::get('/Akash', function () {
    $data = ['name'=>'Nothing01','surname'=>'Loading']; 
    return view('Nothing01',$data);
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
?>








