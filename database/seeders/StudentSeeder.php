<?php

namespace Database\Seeders;
use App\Models\StudentModels;
use Illuminate\Databse\Sedder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
       /*Run the database seed*/
       public function run():  void 
       {

              DB::table ('students')->insert([
              [
                     
                'name' => 'akash',
                'surname' => 'sharma',
                'friendname' => 'anup',
                'mname' => '123456',
                'mobno' => '12232312',
                'mobno2' =>'111371897' ',
            ],
            [
                     
              'name' => 'avinash',
              'surname' => 'sharma',
              'friendname' => 'bhupe',
              'mname' => '0101212',
              'mobno' => '1234342',
              'mobno2' =>'114242897' ',
          ],
          ]),
       }
 }
  