<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

  class Mobilecontroller extends Controller
{
    public function index()
        {
            $Mobile = DB::table('Mobile')->get();
            return view('Mobile',['Mobile'=>$Mobile]);
        }
}        
                             //Use Of Query Builders 
                 
       