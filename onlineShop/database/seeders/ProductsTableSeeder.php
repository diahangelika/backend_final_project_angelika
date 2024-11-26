<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('products')->insert([
            'name' => 'Radio Head T-shirt',
            'img' => 'https://i.pinimg.com/736x/ae/d0/35/aed035e74cfa3aa09058c275b88fa9aa.jpg',
            'category_id'=> 1,
            'brand_id' => 2,
            'price' => 500000,
            'stock' => 50,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'Bowie T-shirt',
            'img' => 'https://i.pinimg.com/736x/78/c6/f6/78c6f6b754f47bec8d3c8793299e34ae.jpg',
            'category_id'=> 1,
            'brand_id' => 3,
            'price' => 150000,
            'stock' => 40,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'The Smith Tshirt',
            'img' => 'https://i.pinimg.com/736x/7c/07/e3/7c07e3b7183cf2cb879f4ad8d73e7f22.jpg',
            'category_id'=> 1,
            'brand_id' => 1,
            'price' => 150000,
            'stock' => 40,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'The Cure Official Merch',
            'img' => 'https://i.pinimg.com/736x/6e/53/12/6e5312dd91234bf932072b4719ec2482.jpg',
            'category_id'=> 1,
            'brand_id' => 1,
            'price' => 150000,
            'stock' => 40,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        
    }
}
