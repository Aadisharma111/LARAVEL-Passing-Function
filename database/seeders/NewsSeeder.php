<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
class NewsSeeder extends Seeder
{
      public function run(): void
    {
        $current = Carbon::now();
 
        DB::table('news')->insert([
            [
                'title'=>'title1',
                'description'=>'image1',
                'image_url'=>'https://thumbs.dreamstime.com/b/news-woodn-dice-depicting-letters-bundle-small-newspapers-leaning-left-dice-34802664.jpg',
                'created_at'=>$current,
                'updated_at'=>$current
            ],
            [
                'title'=>'title2',
                'description'=>'image2',
                'image_url'=>'https://cdn.pixabay.com/photo/2016/11/23/15/49/bundle-1853667_1280.jpg',
                'created_at'=>$current,
                'updated_at'=>$current
            ],
      ]);

    }
}