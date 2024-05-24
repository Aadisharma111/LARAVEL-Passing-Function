<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaraUserController extends Controller
{
 
     public function index()
     {
        //
     }
           //store new creatly storage 

       public function create ()
       {
          return 'store method';
       }
       public function show(LaraUser $larauser)
       {
        //
       }
          public function edit(LaraUser $larauser)
          {
            //
          }
              // updated the specified the resources

          public function update(Request $request, LaraUser $larauser)
          {
            //
          }
             //now  we can remove the speeifed storage

             public function destroy(LaraUser $larauser)
             {
                //
             }
 }    
