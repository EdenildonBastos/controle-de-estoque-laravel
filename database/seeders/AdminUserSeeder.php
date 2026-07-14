<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@stockmaster.com',
            'password' => Hash::make('senha12345678'), // Escolha sua senha de teste
            'role' => 'admin', // Aqui definimos o papel de administrador
        ]);
    }
}
