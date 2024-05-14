<?php
namespace App\Http\Controller;
use illuminate\Htpp\Request;
use App\Models\Bike;

 class Bikecontroller extends Controller
{
       public function index()
    {
    $bikes=Bike::all();
    return view('bike',compact('bike'));
    }
}
      