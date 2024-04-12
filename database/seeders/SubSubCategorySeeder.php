<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sub_sub_categories')->delete();

        DB::table('sub_sub_categories')->insert(array(
            0 =>
                array(
                    "id" => 1,
                    "category_id" => 10,
                    "subcategory_id" => 1,
                    "subsubcategory_name_en" => "Realme Phones",
                    "subsubcategory_slug_en" => "realme-phones",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            1 =>
                array(
                    "id" => 2,
                    "category_id" => 10,
                    "subcategory_id" => 1,
                    "subsubcategory_name_en" => "Samsung Phones",
                    "subsubcategory_slug_en" => "samsung-phones",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            2 =>
                array(
                    "id" => 3,
                    "category_id" => 10,
                    "subcategory_id" => 1,
                    "subsubcategory_name_en" => "Xiaomi Phones",
                    "subsubcategory_slug_en" => "xiaomi-phones",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            3 =>
                array(
                    "id" => 4,
                    "category_id" => 10,
                    "subcategory_id" => 1,
                    "subsubcategory_name_en" => "OPPO Phones",
                    "subsubcategory_slug_en" => "oppo-phones",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            4 =>
                array(
                    "id" => 5,
                    "category_id" => 10,
                    "subcategory_id" => 1,
                    "subsubcategory_name_en" => "Vivo Phones",
                    "subsubcategory_slug_en" => "vivo-phones",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            5 =>
                array(
                    "id" => 6,
                    "category_id" => 10,
                    "subcategory_id" => 2,
                    "subsubcategory_name_en" => "Laptops & Notebooks",
                    "subsubcategory_slug_en" => "laptops-notebooks",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            6 =>
                array(
                    "id" => 7,
                    "category_id" => 10,
                    "subcategory_id" => 2,
                    "subsubcategory_name_en" => "Gaming Laptops",
                    "subsubcategory_slug_en" => "gaming-laptops",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            7 =>
                array(
                    "id" => 8,
                    "category_id" => 10,
                    "subcategory_id" => 2,
                    "subsubcategory_name_en" => "Macbook", "subsubcategory_slug_en" => "gaming-laptops",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            8 =>
                array(
                    "id" => 9,
                    "category_id" => 10,
                    "subcategory_id" => 3,
                    "subsubcategory_name_en" => "Gaming Desktops",
                    "subsubcategory_slug_en" => "gaming-desktops",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            9 =>
                array(
                    "id" => 10,
                    "category_id" => 10,
                    "subcategory_id" => 3,
                    "subsubcategory_name_en" => "All-In-One",
                    "subsubcategory_slug_en" => "all-in-one",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            10 =>
                array(
                    "id" => 11,
                    "category_id" => 10,
                    "subcategory_id" => 4,
                    "subsubcategory_name_en" => "DSLR",
                    "subsubcategory_slug_en" => "dslr",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            11 =>
                array(
                    "id" => 12,
                    "category_id" => 10,
                    "subcategory_id" => 4,
                    "subsubcategory_name_en" => "Mirrorless",
                    "subsubcategory_slug_en" => "mirrorless",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            12 =>
                array(
                    "id" => 13,
                    "category_id" => 10,
                    "subcategory_id" => 4,
                    "subsubcategory_name_en" => "Point & Shoot",
                    "subsubcategory_slug_en" => "point-shoot",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            13 =>
                array(
                    "id" => 14,
                    "category_id" => 10,
                    "subcategory_id" => 4,
                    "subsubcategory_name_en" => "Bridge",
                    "subsubcategory_slug_en" => "bridge",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            14 =>
                array(
                    "id" => 15,
                    "category_id" => 10,
                    "subcategory_id" => 4,
                    "subsubcategory_name_en" => "Action/Video Cameras",
                    "subsubcategory_slug_en" => "actionvideo-cameras",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            15 =>
                array(
                    "id" => 16,
                    "category_id" => 10,
                    "subcategory_id" => 5,
                    "subsubcategory_name_en" => "PlayStation Consoles",
                    "subsubcategory_slug_en" => "playstation-consoles",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            16 =>
                array(
                    "id" => 17,
                    "category_id" => 10,
                    "subcategory_id" => 5,
                    "subsubcategory_name_en" => "Playstation Games",
                    "subsubcategory_slug_en" => "playstation-games",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            17 =>
                array(
                    "id" => 18,
                    "category_id" => 10,
                    "subcategory_id" => 5,
                    "subsubcategory_name_en" => "Playstation Controllers",
                    "subsubcategory_slug_en" => "playstation-controllers",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            18 =>
                array(
                    "id" => 19,
                    "category_id" => 10,
                    "subcategory_id" => 5,
                    "subsubcategory_name_en" => "Nintendo Games",
                    "subsubcategory_slug_en" => "nintendo-games",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            19 =>
                array(
                    "id" => 20,
                    "category_id" => 9,
                    "subcategory_id" => 6,
                    "subsubcategory_name_en" => "Phone Cases",
                    "subsubcategory_slug_en" => "phone-cases",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            20 =>
                array(
                    "id" => 21,
                    "category_id" => 9,
                    "subcategory_id" => 6,
                    "subsubcategory_name_en" => "Power Banks",
                    "subsubcategory_slug_en" => "power-banks",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            21 =>
                array(
                    "id" => 22,
                    "category_id" => 9,
                    "subcategory_id" => 6,
                    "subsubcategory_name_en" => "Cables & Converters",
                    "subsubcategory_slug_en" => "power-banks",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            22 =>
                array(
                    "id" => 23,
                    "category_id" => 9,
                    "subcategory_id" => 6,
                    "subsubcategory_name_en" => "Wall Chargers",
                    "subsubcategory_slug_en" => "wall-chargers",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            23 =>
                array(
                    "id" => 24,
                    "category_id" => 9,
                    "subcategory_id" => 7,
                    "subsubcategory_name_en" => "Headphones & Headset",
                    "subsubcategory_slug_en" => "headphones-headset",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            24 =>
                array(
                    "id" => 25,
                    "category_id" => 9,
                    "subcategory_id" => 7,
                    "subsubcategory_name_en" => "Home Entertainment",
                    "subsubcategory_slug_en" => "home-entertainment",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                ),
            25 =>
                array(
                    "id" => 26,
                    "category_id" => 9,
                    "subcategory_id" => 7,
                    "subsubcategory_name_en" => "Bluetooth Speakers",
                    "subsubcategory_slug_en" => "bluetooth-speakers",
                    "created_at" => Carbon::now()->format('Y-m-d'),
                )
        ));
    }
}
