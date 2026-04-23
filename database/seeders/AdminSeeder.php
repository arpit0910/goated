<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@goated.com'],
            [
                'name' => 'Admin GOATED',
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            ]
        );
    }
}
