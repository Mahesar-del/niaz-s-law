<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::updateOrCreate(
            ['email' => 'admin@niazlawpc.com'],
            [
                'name' => 'Niaz Law Admin',
                'password' => Hash::make('NiazAdmin@2026'),
            ]
        );
    }
}
