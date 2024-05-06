<?php
//Import Area 
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Enemycontroller;

Route::get('/', function () {
    return view('welcome');  
});

Route::get('/Akash', function () {
    $data = ['name'=>'Nothing01','surname'=>'Loading']; 
    return view('Nothing01',$data);
});

Route::get('/Nothing01',[Enemycontroller::class,'Nothing01']);

?>
