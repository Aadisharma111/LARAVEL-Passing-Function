<?php
namespace App\Http\Controllers;
use Illuminate\Htpp\Request;
use Illuminate\Support\Facades\DB;

 class Bikecontroller extends Controller
{
       public function index()
    {  
        $bikes = DB::table('bikes')->get();
    return view('bike',['bikes'=>$bikes]);
    }
}
      