<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('12345'),
            // 'roles' => '1'
            ],

            [
            'name' => 'superadmin',
            'email' => 'superadmin@superadmin',
            'password' => bcrypt('12345'),
            'roles' => '1'
            ],
        ];

        foreach ($user as $key => $value) {
            Admin::create($value);
        }
    }
}
