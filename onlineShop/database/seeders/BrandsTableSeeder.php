<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('brands')->insert([
            'brand_name' => 'Rad23',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'Cynic Everyday Wear',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('brands')->insert([
            'brand_name' => 'yourmomlovesme',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
