<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création d'un utilisateur test avec mot de passe testtest
        User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => Hash::make('rootroot'),
        ]);
    }
}