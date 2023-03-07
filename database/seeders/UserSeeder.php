<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'name' => 'Ad Ministrator',
                'email' => "ad.ministrator@example.com",
                'password' => 'Password1',
                'roles' => ['admin', 'member', 'staff'],
            ],
            [
                'name' => 'Annie Wun',
                'email' => "annie.wun@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Andy Mann',
                'email' => "andy.mann@example.com",
                'password' => 'Password1',
                'roles' => ['staff', 'member'],
            ],
        ];

        foreach ($seedUsers as $newUser) {
            $newUser['password'] = Hash::make($newUser['password']);
            $user = User::create([
                'name' => $newUser['name'],
                'email' => $newUser['email'],
                'password' => $newUser['password'],
            ]);
        }

    }
}
