<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('product')->insert([
            [
                'name' => "LG TV",
                'description' => "4gb ram and 64 gb storage",
                'price' => "30000",
                'category' => "LG TV",
                'gallery' => "https://tse2.mm.bing.net/th?id=OIP._OAb31KUJONlnq-c4P6kLwHaHa&pid=Api&P=0"
            ],
            [
                'name' => "Refrigerator",
                'description' => "4gb ram and 64 gb storage",
                'price' => "30000",
                'category' => "Electronics",
                'gallery' => "https://tse1.mm.bing.net/th?id=OIP.4kD9rJ6w7SXlkruM4SPihwHaG1&pid=Api&P=0"
            ],
            [
            'name' => "Oppo Mobile",
            'description' => "4gb ram and 64 gb storage",
            'price' => "30000",
            'category' => "Mobile",
            'gallery' => "https://tse2.mm.bing.net/th?id=OIP.Xe_XF3cyQJXyyky-1qmEcgHaHa&pid=Api&P=0"
            ]
            ] );
    }
}
