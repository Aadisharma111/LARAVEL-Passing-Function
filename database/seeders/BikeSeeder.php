<?php
namespace database\Sedders;
use Illuminate\Database\console\seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bike;               

   class BikeSeeder extends Seeder 
   {
    public function run():  void
    {
           Bike::create([
            'brand_name' => 'ROYAL ENFILED',
           ]);
    }
   }
   
   
