<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'username' => 'admin1',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('111111'),
            'namaLengkap' => 'Admin satu',
            'alamat' => 'Jl. Contoh 123',
        ]);
    }
}
