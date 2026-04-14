<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin account
        User::updateOrCreate(
            ['email' => 'admin123@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('Admin123'),
                'phone' => '014-1258963',
                'status' => 'active',
                'role' => 'admin',
            ]
        );

        // Create a sample customer account
        User::updateOrCreate(
            ['email' => 'user123@gmail.com'],
            [
                'name' => 'User',
                'password' => Hash::make('User123'),
                'phone' => '014-1258963',
                'status' => 'active',
                'role' => 'customer',
            ]
        );

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: user123@gmail.com');
        $this->command->info('Password: Admin123');
    }
}
