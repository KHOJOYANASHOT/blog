<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Shoes'
        ]);
        Category::create([
            'title' => 'Futsal'
        ]);
        Category::create([
            'title' => 'FootBall'
        ]);
        Category::create([
            'title' => 'Casual'
        ]);
    }
}
