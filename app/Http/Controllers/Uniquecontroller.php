<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
   
    class Uniquecontroller extends Controller
    {
        public function index()
        {
            $Unique = DB::table('Unique')->get();

            return view('bike',['Unique'=>$Unique]);
        }
        
    }
                 //use index table method oriented
                 