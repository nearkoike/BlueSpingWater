<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Small Nature Spring Alkaline Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'alkaline',
                'image' => 'https://images.freshop.com/1564405684702536822/9f2ec40fcdf0194e5b7e5c091406c302_large.png',
                'price' => 100,
            ],
            [
                'name' => 'Small Nature Spring Purified Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'purified',
                'image' => 'https://ipcdn.freshop.com/resize?url=https://images.freshop.com/1564405684702536820/5ad26288cecdc74c503b4899fec56838_large.png&width=512&type=webp&quality=90',
                'price' => 100,
            ],
            [
                'name' => 'Small Le Mineral Mineral Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'mineral',
                'image' => 'https://imartgrocersph.com/wp-content/uploads/2020/08/Le-Mineral-Mountain-Mineral-Water-600mL.jpg',
                'price' => 100,
            ],
            [
                'name' => 'Liters Nature Spring Alkaline Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'alkaline',
                'image' => 'https://images.freshop.com/1564405684702536828/08e63d78f85b8a01080b012b3b95d6e1_large.png',
                'price' => 100,
            ],
            [
                'name' => 'Liters Nature Spring Purified Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'purified',
                'image' => 'https://cdn.shopify.com/s/files/1/0262/3891/0511/products/NSWPurified6.6L_699x748.png?v=1673840524',
                'price' => 100,
            ],
            [
                'name' => 'Liters Le Mineral Mineral Water',
                'description' => 'Laging natural walang halong kemikal',
                'type' => 'mineral',
                'image' => 'https://cf.shopee.ph/file/ddc915aaf70f383fd5aed58ef069cef6',
                'price' => 100,
            ]
        ]
        );
    }
}
