<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'nama' => 'Uniqlo',
            'deskripsi' => 'Blouse tunik berbahan Crepe, bahannya dapat menyerap keringat dengan baik.
            Cocok digunakan untuk sholat ied maupun acara silahturahmi dilebaran.',
            'harga' => '150000',
            'stok' => '29',
            'gambar' => 'product-3.png',
            'kategori_id' => '1',
        ]);
    }
}
