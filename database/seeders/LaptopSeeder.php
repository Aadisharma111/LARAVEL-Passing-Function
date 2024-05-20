<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('laptops')->insert([ 
                                        ['brand_name'=>'IBALL'],
                                        [''=>'brand_nameASUS'],
                                        ['brand_name'=>'APPLE'],
                                        ['brand_name'=>'HP']
                                    ]);
    }
}
