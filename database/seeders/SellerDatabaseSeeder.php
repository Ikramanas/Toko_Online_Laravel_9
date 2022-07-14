<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerDatabaseSeeder extends Seeder
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
            'username' => 'penjual',
            'email' => 'penjual@penjual',
            'password' => bcrypt('12345'),
            'roles' => '2'
            ],

            [
            'username' => 'pabalu',
            'email' => 'pabalu@pabalu',
            'password' => bcrypt('12345'),
            'roles' => '2'
            ],

            [
            'username' => 'pelapak',
            'email' => 'pelapak@pelapak',
            'password' => bcrypt('12345'),
            'roles' => '2'
            ]
        ];

        foreach ($user as $key => $value) {
            Seller::create($value);
        }
    }
}
