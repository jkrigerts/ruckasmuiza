<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::create([
            'name' => 'Latvijas pērles',
            'color' => 'hsla(38deg, 69%, 45%, 0.9)'
        ]);
        BlogCategory::create([
            'name' => 'Mans skats',
            'color' => 'hsla(69deg, 32%, 40%, 0.9)'
        ]);
        BlogCategory::create([
            'name' => 'Medžugorje',
            'color' => 'hsla(202deg, 36%, 45%, 0.9)'
        ]);
        BlogCategory::create([
            'name' => 'Saimniekošana muižās',
            'color' => 'hsla(330deg, 100%, 28%, 0.9)'
        ]);
    }
}
