<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Seed sample products
        Product::create([
            'name' => 'Product 1',
            'description' => 'description 1',
            'price' => 19.99,
            'category_id' => 1, // Replace with the actual category ID
            // Add other product-related fields as needed
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'description 2',
            'price' => 29.99,
            'category_id' => 2, // Replace with the actual category ID
            // Add other product-related fields as needed
        ]);

        // Add more product records as needed
    }
}
