<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
                [
                    'name'=>'LG mobile',
                    "price"=>"200",
                    "description"=>"A smartphone with 4gb ram and more features",
                    "category" =>"mobile",
                    "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSpBHJkYxNapf20ldO_OgrUZMGPWOrqmK_tMg&usqp=CAU"
               
                ],
                 [
                    'name'=>'Chinese Fridge',
                    "price"=>"500",
                    "description"=>"A cooling fridge",
                    "category" =>"fridge",
                    "gallery"=>"https://image.made-in-china.com/2f0j00QJItAdEUaMgf/Solar-Power-Double-Door-Fridge-DC-Compressor-12V-Upright-Refrigerator.jpg"
               
                 ],
                 [
                    'name'=>'Xian tv',
                    "price"=>"450",
                    "description"=>"A Tv that you can use to watch the news",
                    "category" =>"tv",
                    "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSpBHJkYxNapf20ldO_OgrUZMGPWOrqmK_tMg&usqp=CAUhttps://www.xiaomiproducts.nl/xiaomi-smart-mi-tv-4s-55-inch.html"
               
                 ],
                 [
                    'name'=>'Ikea tv',
                    "price"=>"345",
                    "description"=>"One of the best tv on the market",
                    "category" =>"tv",
                    "gallery"=>"https://www.ikea.com/nl/nl/images/products/brimnes-tv-meubel-wit__0850897_PE725294_S5.JPG"
               
                 ]
            
        ]);
    }
}
