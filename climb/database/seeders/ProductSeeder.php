<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 1 description',
            'price' => '$100.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Product 2',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 2 description',
            'price' => '$100.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Product 3',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 3 description',
            'price' => '$100.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Product 4',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 4 description',
            'price' => '$100.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Product 5',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 5 description',
            'price' => '$100.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Product 6',
            'image' => 'https://source.unsplash.com/random/300×300/?product',
            'description' => 'Product 6 description',
            'price' => '$100.00'
        ]);
    }
}
