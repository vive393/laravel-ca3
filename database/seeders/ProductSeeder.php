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
                'name'=>'OnePlus 11 5G',
                "price"=>"56,998",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/61amb0CfMGL._SL1500_.jpg"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"25,500",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://png.pngtree.com/png-vector/20220513/ourlarge/pngtree-black-led-tv-television-screen-blank-on-white-wall-background-png-image_4594905.png"
            ],
            [
                'name'=>'Sony Bravia',
                "price"=>"40,000",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"15,000",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'HyperX Cloud',
                "price"=>"2,790",
                "description"=>"7.1 surround sound gaming headphone",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T7mTX-OjL._SL1500_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'G.Skill 8GB',
                "price"=>"1,729",
                "description"=>"Ram with built-in heatsink",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/51eb3VQyt4L._SL1000_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'G.Skill 8GB',
                "price"=>"89,999",
                "description"=>"Ram with built-in heatsink",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/51eb3VQyt4L._SL1000_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'OnePlus 11 5G',
                "price"=>"56,998",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/61amb0CfMGL._SL1500_.jpg"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"25,500",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://png.pngtree.com/png-vector/20220513/ourlarge/pngtree-black-led-tv-television-screen-blank-on-white-wall-background-png-image_4594905.png"
            ],
            [
                'name'=>'Sony Bravia',
                "price"=>"40,000",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"15,000",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'HyperX Cloud',
                "price"=>"2,790",
                "description"=>"7.1 surround sound gaming headphone",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T7mTX-OjL._SL1500_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'G.Skill 8GB',
                "price"=>"1,729",
                "description"=>"Ram with built-in heatsink",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/51eb3VQyt4L._SL1000_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ],
            [
                'name'=>'G.Skill 8GB',
                "price"=>"89,999",
                "description"=>"Ram with built-in heatsink",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/51eb3VQyt4L._SL1000_.jpg"
            ],
            [
                'name'=>'ASUS ROG Strix',
                "price"=>"89,999",
                "description"=>"Gaming laptop with RTX 3050 GPU and Intel Core i5-13450HX 13th Gen",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/71T4m4vigmL._SL1500_.jpg"
            ]
            
            
        ]);
    }
}
