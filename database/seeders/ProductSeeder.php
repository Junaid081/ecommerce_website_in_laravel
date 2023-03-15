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
        
        DB::table('products')->insert([
            [
                'name' => "LG TV",
                'description' => "4gb ram and 64 gb storage",
                'price' => "30000",
                'category' => "LG TV",
                'gallery' => "https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg"
            ],
            [
                'name' => "Refrigerator",
                'description' => "4gb ram and 64 gb storage",
                'price' => "30000",
                'category' => "Electronics",
                'gallery' => "https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg"
            ],
            [
            'name' => "Oppo Mobile",
            'description' => "4gb ram and 64 gb storage",
            'price' => "30000",
            'category' => "Mobile",
            'gallery' => "https://cdn.fstoppers.com/styles/full/s3/media/2019/12/04/nando-jpeg-quality-screenshot_dsc-hv400v.jpg"
            ]
            ] );
    }
}
