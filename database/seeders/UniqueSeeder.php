<?php
namespace Database\Seeders;
use Illuminate\Database\console\Seeds\WithoutModelEvent;
use Illuminate\Databse\Sedder;
use Illuminate\Support\Facades\DB;
class UniqueSeeder extends Seeder
{
    public function run() :  void
    {
    DB::table('Unqiue')->insert([         /*Array of Assis aray*/
                    ['A_name'=> 'rvn'],
                    ['b_name'=> 'ass'],
                    ['C_name'=> 'sde'],
                    ['D_name'=> 'pvr'],
      ]);
    }
}
     // come from  artisan methods of the system in the valid source of the system 
