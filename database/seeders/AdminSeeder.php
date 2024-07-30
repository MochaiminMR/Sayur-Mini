<?php

namespace Database\Seeders;

use App\Models\M_admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        M_admin::create([
            'id'=> 1,
            'username' => 'AdminMini',
            'password' => Hash::make('P@ssw0rd'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
