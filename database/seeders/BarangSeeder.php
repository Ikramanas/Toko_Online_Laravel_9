<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'kategori_id'   => '3',
                'name'          => 'Bola Basket',
                'harga'         => '100000',
                'jumlah'   => '10',
                'deskripsi'   => 'bola basket kuat dan tahan lama',
            ],
            [
                'kategori_id'   => '4', //gadget
                'name'          => 'Hp Xiaomi Note 4',
                'harga'         => '10000000',
                'jumlah'        => '10',
                'deskripsi'     => 'handphone kuat dan awet',
            ],
            [
                'kategori_id'   => '3',
                'name'          => 'Raket Nike',
                'harga'         => '7800000',
                'jumlah'        => '100',
                'deskripsi'     => 'raket bermerek internasional',
            ],
        ];
        foreach ($barang as $key => $value) {
            Barang::create($value);
        }
    }
}
