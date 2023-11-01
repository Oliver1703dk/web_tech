<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Cart;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // Seed a normal user
        Customer::create([
            //'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'phone' => '12345678',
            'admin' => false
        ]);

        // Seed an admin user
        Customer::create([
            //'name' => 'Admin Name',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // You can hash the password using the bcrypt() function
            'phone' => '12345678',
            'admin' => true
        ]);


    }
}

