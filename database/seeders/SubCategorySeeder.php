<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{

    public function run()
    {
        DB::table('sub_categories')->delete();

        DB::table('sub_categories')->insert(array(
            0 =>
            array(
                "id" => 1,
                "category_id" => 10,
                "subcategory_name_en" => "Smartphones",
                "subcategory_slug_en" => "smartphones",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            1 =>
            array(
                "id" => 2,
                "category_id" => 10,
                "subcategory_name_en" => "Laptops",
                "subcategory_slug_en" => "laptops",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            2 =>
            array(
                "id" => 3,
                "category_id" => 10,
                "subcategory_name_en" => "Desktop",
                "subcategory_slug_en" => "desktop",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            3 =>
            array(
                "id" => 4,
                "category_id" => 10,
                "subcategory_name_en" => "Camera",
                "subcategory_slug_en" => "camera",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            4 =>
            array(
                "id" => 5,
                "category_id" => 10,
                "subcategory_name_en" => "Gamming Console",
                "subcategory_slug_en" => "gamming-console",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            5 =>
            array(
                "id" => 6,
                "category_id" => 9,
                "subcategory_name_en" => "Mobile Accessories",
                "subcategory_slug_en" => "mobile-accessories",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            6 =>
            array(
                "id" => 7,
                "category_id" => 9,
                "subcategory_name_en" => "Audio",
                "subcategory_slug_en" => "audio",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            7 =>
            array(
                "id" => 8,
                "category_id" => 9,
                "subcategory_name_en" => "Camera Accessories",
                "subcategory_slug_en" => "camera-accessories",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            8 =>
            array(
                "id" => 9,
                "category_id" => 9,
                "subcategory_name_en" => "Computer Accessories",
                "subcategory_slug_en" => "computer-accessories",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            9 =>
            array(
                "id" => 10,
                "category_id" => 9,
                "subcategory_name_en" => "Computer Components",
                "subcategory_slug_en" => "computer-components",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            10 =>
            array(
                "id" => 11,
                "category_id" => 8,
                "subcategory_name_en" => "Television",
                "subcategory_slug_en" => "television",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            11 =>
            array(
                "id" => 12,
                "category_id" => 8,
                "subcategory_name_en" => "Home Audio",
                "subcategory_slug_en" => "home-audio",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            12 =>
            array(
                "id" => 13,
                "category_id" => 8,
                "subcategory_name_en" => "TV Accessories & Video Device",
                "subcategory_slug_en" => "tv-accessories-&-video-device",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            13 =>
            array(
                "id" => 14,
                "category_id" => 8,
                "subcategory_name_en" => "Fan",
                "subcategory_slug_en" => "fan",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            14 =>
            array(
                "id" => 15,
                "category_id" => 8,
                "subcategory_name_en" => "Cooling & Heating",
                "subcategory_slug_en" => "cooling-&-heating",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            15 =>
            array(
                "id" => 16,
                "category_id" => 7,
                "subcategory_name_en" => "Bath & Body",
                "subcategory_slug_en" => "bath-&-body",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            16 =>
            array(
                "id" => 17,
                "category_id" => 7,
                "subcategory_name_en" => "Beauty Tools",
                "subcategory_slug_en" => "beauty-tools",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            17 =>
            array(
                "id" => 18,
                "category_id" => 7,
                "subcategory_name_en" => "Hair Care",
                "subcategory_slug_en" => "hair-care",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            18 =>
            array(
                "id" => 19,
                "category_id" => 7,
                "subcategory_name_en" => "Makeup",
                "subcategory_slug_en" => "makeup",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            19 =>
            array(
                "id" => 20,
                "category_id" => 7,
                "subcategory_name_en" => "Skin Care",
                "subcategory_slug_en" => "skin-care",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            20 =>
            array(
                "id" => 21,
                "category_id" => 6,
                "subcategory_name_en" => "Feeding",
                "subcategory_slug_en" => "feeding",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            21 =>
            array(
                "id" => 22,
                "category_id" => 6,
                "subcategory_name_en" => "Diapering & Potty",
                "subcategory_slug_en" => "diapering-&-potty",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            22 =>
            array(
                "id" => 23,
                "category_id" => 6,
                "subcategory_name_en" => "Baby Gear",
                "subcategory_slug_en" => "baby-gear",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            23 =>
            array(
                "id" => 24,
                "category_id" => 6,
                "subcategory_name_en" => "Baby Personal Care",
                "subcategory_slug_en" => "baby-personal-Care",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            24 =>
            array(
                "id" => 25,
                "category_id" => 6,
                "subcategory_name_en" => "Nursery",
                "subcategory_slug_en" => "nursery",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            25 =>
            array(
                "id" => 26,
                "category_id" => 5,
                "subcategory_name_en" => "Saree",
                "subcategory_slug_en" => "saree",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            26 =>
            array(
                "id" => 27,
                "category_id" => 5,
                "subcategory_name_en" => "Shalwar Kameez",
                "subcategory_slug_en" => "shalwar-kameez",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            27 =>
            array(
                "id" => 28,
                "category_id" => 5,
                "subcategory_name_en" => "Women's Dresses",
                "subcategory_slug_en" => "women's-dresses",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            28 =>
            array(
                "id" => 29,
                "category_id" => 5,
                "subcategory_name_en" => "Kurtis",
                "subcategory_slug_en" => "kurtis",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            29 =>
            array(
                "id" => 30,
                "category_id" => 5,
                "subcategory_name_en" => "Women's bag",
                "subcategory_slug_en" => "women's-bag",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            30 =>
            array(
                "id" => 31,
                "category_id" => 1,
                "subcategory_name_en" => "Bath",
                "subcategory_slug_en" => "bath",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            31 =>
            array(
                "id" => 32,
                "category_id" => 1,
                "subcategory_name_en" => "Bedding",
                "subcategory_slug_en" => "bedding",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            32 =>
            array(
                "id" => 33,
                "category_id" => 1,
                "subcategory_name_en" => "Decor",
                "subcategory_slug_en" => "decor",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            33 =>
            array(
                "id" => 34,
                "category_id" => 1,
                "subcategory_name_en" => "Furniture",
                "subcategory_slug_en" => "furniture",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            34 =>
            array(
                "id" => 35,
                "category_id" => 1,
                "subcategory_name_en" => "Kitchen & Dining",
                "subcategory_slug_en" => "kitchen-&-dining",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            35 =>
            array(
                "id" => 36,
                "category_id" => 4,
                "subcategory_name_en" => "T-Shirts",
                "subcategory_slug_en" => "t-shirts",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            36 =>
            array(
                "id" => 37,
                "category_id" => 4,
                "subcategory_name_en" => "Kurtas",
                "subcategory_slug_en" => "kurtas",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            37 =>
            array(
                "id" => 38,
                "category_id" => 4,
                "subcategory_name_en" => "Shirts",
                "subcategory_slug_en" => "shirts",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            38 =>
            array(
                "id" => 39,
                "category_id" => 4,
                "subcategory_name_en" => "Jeans",
                "subcategory_slug_en" => "jeans",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            39 =>
            array(
                "id" => 40,
                "category_id" => 4,
                "subcategory_name_en" => "Shoes",
                "subcategory_slug_en" => "Shoes",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            40 =>
            array(
                "id" => 41,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Watch",
                "subcategory_slug_en" => "Men's Watch",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            41 =>
            array(
                "id" => 42,
                "category_id" => 3,
                "subcategory_name_en" => "Women's Watch",
                "subcategory_slug_en" => "Women's Watch",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            42 =>
            array(
                "id" => 43,
                "category_id" => 3,
                "subcategory_name_en" => "Women's Jewelleries",
                "subcategory_slug_en" => "Women's Jewelleries",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            43 =>
            array(
                "id" => 44,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Jewelleries",
                "subcategory_slug_en" => "Men's Jewelleries",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            44 =>
            array(
                "id" => 45,
                "category_id" => 3,
                "subcategory_name_en" => "Men's Belt",
                "subcategory_slug_en" => "Men's Belt",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            45 =>
            array(
                "id" => 46,
                "category_id" => 2,
                "subcategory_name_en" => "Treadmills",
                "subcategory_slug_en" => "Treadmills",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            46 =>
            array(
                "id" => 47,
                "category_id" => 2,
                "subcategory_name_en" => "Boxing, Martial Arts & MMA",
                "subcategory_slug_en" => "Boxing, Martial Arts & MMA",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            47 =>
            array(
                "id" => 48,
                "category_id" => 2,
                "subcategory_name_en" => "Men Shoes & Clothing",
                "subcategory_slug_en" => "Men Shoes & Clothing",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            48 =>
            array(
                "id" => 49,
                "category_id" => 2,
                "subcategory_name_en" => "Outdoor Recreation",
                "subcategory_slug_en" => "Outdoor Recreation",
                "created_at" => Carbon::now()->format('Y-m-d'),
            ),
            49 =>
            array(
                "id" => 50,
                "category_id" => 2,
                "subcategory_name_en" => "Exercise & Fitness",
                "subcategory_slug_en" => "Exercise & Fitness",
                "created_at" => Carbon::now()->format('Y-m-d'),
            )
        ));
    }
}
