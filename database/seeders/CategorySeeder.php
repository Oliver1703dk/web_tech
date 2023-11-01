<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Create and seed the first category
        Category::create([
            'category' => 'Category 1',
            // Add other category-related fields as needed
        ]);

        // Create and seed the second category
        Category::create([
            'category' => 'Category 2',
            // Add other category-related fields as needed
        ]);

        // You can create and seed more categories as needed
    }
}
