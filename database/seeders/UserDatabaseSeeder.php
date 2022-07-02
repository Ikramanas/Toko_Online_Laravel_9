<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       $user = [
            [
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('12345678'),
            'roles' => '1'
            ],

            [
            'name' => 'kasir',
            'email' => 'kasir@kasir',
            'password' => bcrypt('12345678'),
            'roles' => '2'
            ],

            [
            'name' => 'customer',
            'email' => 'customer@customer',
            'password' => bcrypt('12345678'),
            'roles' => '3'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
