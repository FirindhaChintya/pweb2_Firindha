<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::truncate();
        user::create([
            'email'=>'admin@gmail.com',
            'level'=>'admin',
        'password'=>bcrypt('admin123'),
        // 'remember_token'=> Str::random(60),
        ]);
    }
}
