<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'adminnn@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecs@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'teacher',
        ]);

        User::create([
            'name' => 'student',
            'email' => 'studes@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'student',
        ]);
    }
}
