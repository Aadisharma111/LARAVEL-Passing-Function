<?php
namespace Database\Seeder;
use Illuminate\Databse\Console\Seeds\WithoutModelEvent;
use Illuminate\Databse\Sedder;
use Illuminate\Support\Facades\DB;
class MobileSeeder extends Seeder
{
    public function run() : void 
    {
        DB::table('Mobile')->insert([
            ['Mobile_name'=> 'I PHONE 15 PRO MAX'],
            ['brand_name'=> 'APPLE'],
        ]);
    }          //[PHP Array]
}
