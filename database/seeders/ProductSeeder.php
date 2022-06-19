<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => "iphone 13",
            'description' => "Mobile phone apple",
            'amount' => 980
        ]);
        DB::table('products')->insert([
            'name' => "iphone 14",
            'description' => "Mobile phone apple",
            'amount' => 1500
        ]);
        DB::table('products')->insert([
            'name' => "iphone 15",
            'description' => "Mobile phone apple",
            'amount' => 500
        ]);
    }
}
