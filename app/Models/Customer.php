<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private $id;
    private $username;
    private $password;
    private $email;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function register() {
        // Implementation for user registration
    }

    public function login() {
        // Implementation for user login
    }
}
