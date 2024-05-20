<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;
                              // Ex=Single Inheritance
class Citycontroller extends Controller

  {
    public $data2 = ['fullname'=>'Anubhav Bassi'];

      public function Indore(){
        $data = ["fullname"=>"Arun Bassi"];

         return view ('mp.Indore',compact('data'));
      }
           public function Bhopal(){
            return view ('mp.Bhopal')->with($this->data2);
      }
           }
                    

     
