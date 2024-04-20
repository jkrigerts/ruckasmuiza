<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Kultūra',
            'color' => '#9E004F'
        ]);
        Type::create([
            'name' => 'Lekcija',
            'color' => '#8F9A50'
        ]);
        Type::create([
            'name' => 'Nodarbību cikls',
            'color' => '#AF4836'
        ]);
        Type::create([
            'name' => 'Meistarklase',
            'color' => '#AF4836'
        ]);
        Type::create([
            'name' => 'Koncerts',
            'color' => '#548EAF'
        ]);
        Type::create([
            'name' => 'Atcelts',
            'color' => '#616359'
        ]);
        Type::create([
            'name' => 'Skolniekiem',
            'color' => '#D9992D'
        ]);
        Type::create([
            'name' => 'Bērniem',
            'color' => '#D9992D'
        ]);
        Type::create([
            'name' => 'Izrāde',
            'color' => '#9E004F'
        ]);
    }
}
