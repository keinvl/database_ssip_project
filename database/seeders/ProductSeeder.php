<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        //product1
        Product::create([
            'name' => '2X Royal Canin Hair & Skin Care Adult Cat Food 400gr',
            'description' => 'Dry food for adult cats designed to maintain fur health and alleviates skin issues.',
            'stock' => 15,
            'price' => 168000,
            'category' => 'food',
            'image' => 'shop-01.jpg'
        ]);

        //product2
        Product::create([
            'name' => '2X Royal Canin Kitten Dry Cat Food 400gr',
            'description' => 'Created exclusively for kittens that have not yet reached a year of age.',
            'stock' => 15,
            'price' => 143500,
            'category' => 'food',
            'image' => 'shop-02.jpg'
        ]);

        //product3
        Product::create([
            'name' => '2X Royal Canin Xsmall Adult Dog Food 500gr',
            'description' => 'Suitable for adult dogs that are particularly petite (no more than 4 kg).',
            'stock' => 15,
            'price' => 160000,
            'category' => 'food',
            'image' => 'shop-03.jpg'
        ]);

        //product4
        Product::create([
            'name' => '3X Royal Canin Kitten in Gravy Wet Kitten Food 85gr',
            'description' => 'Broth-based offering containing soft meat pieces, for kittens who are up to a year old.',
            'stock' => 20,
            'price' => 63000,
            'category' => 'food',
            'image' => 'shop-04.jpg'
        ]);

        //product5
        Product::create([
            'name' => '3X Royal Canin Puppy Maxi Puppy Food 140gr',
            'description' => 'Contains an exclusive combination of nutrients to support optimal digestive security.',
            'stock' => 20,
            'price' => 75000,
            'category' => 'food',
            'image' => 'shop-05.jpg'
        ]);

        //product6
        Product::create([
            'name' => 'Bowl & Drinker With Stand PB-806',
            'description' => 'Measuring 27 x 20 x 43 cm, tailored to suit your pet feeding area.',
            'stock' => 5,
            'price' => 145000,
            'category' => 'equipment',
            'image' => 'shop-06.jpg'
        ]);

        //product7
        Product::create([
            'name' => 'Fur Easy Set',
            'description' => 'Fur Easy brush with self-cleaning base for Home Fur Easy brush for travelling.',
            'stock' => 5,
            'price' => 81000,
            'category' => 'equipment',
            'image' => 'shop-07.jpg'
        ]);

        //product8
        Product::create([
            'name' => 'Homey Pajamas Teddy Floral, Size L',
            'description' => 'These pajamas provide a lovely and comfortable option for your pet daily attire.',
            'stock' => 12,
            'price' => 86000,
            'category' => 'cloth',
            'image' => 'shop-08.jpg'
        ]);

        //product9
        Product::create([
            'name' => 'M-Pets Tender Message Comb Sharp Teeth',
            'description' => 'Animal massage comb with sharp teeth made of silicon.',
            'stock' => 5,
            'price' => 100500,
            'category' => 'equipment',
            'image' => 'shop-09.jpg'
        ]);

        //product10
        Product::create([
            'name' => 'Pet Harness Set with Leash (Ruffled Denim), Size XS',
            'description' => 'The design includes both a drawstring and buttons, adding a stylish touch.',
            'stock' => 12,
            'price' => 86800,
            'category' => 'cloth',
            'image' => 'shop-10.jpg'
        ]);

        //product11
        Product::create([
            'name' => 'Quilted Vest - Sage Green, Size L',
            'description' => 'Our quilted winter jackets are made of windproof and waterproof fabric.',
            'stock' => 12,
            'price' => 35000,
            'category' => 'cloth',
            'image' => 'shop-11.jpg'
        ]);

        //product12
        Product::create([
            'name' => 'Woofidoo Korea Cloudy Top, Size XXL',
            'description' => 'A cozy and airy fabric boasting a design characteristic of Korean style.',
            'stock' => 12,
            'price' => 75000,
            'category' => 'cloth',
            'image' => 'shop-12.jpg'
        ]);
    }
}
