<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create multiple users with roles
        User::create([
            'name' => 'Umer Hayat',
            'email' => 'uh7516537@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 'admin',
        ]);

        User::create([
            'name' => 'Khizar Hayat',
            'email' => 'khizaerhayat@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 'surveyor',
        ]);

        User::create([
            'name' => 'Ahmad',
            'email' => 'ahmadkhan@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 'surveyor',
        ]);

        User::create([
            'name' => 'Asif Ali',
            'email' => 'Asifali@gmail.com',
            'password' => Hash::make('password'),
            'roles' => 'surveyor',
        ]);
    }
}

