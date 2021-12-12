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
            'deskripsi' => 'Brand terpopuler saat ini',
            'harga' => '450000',
            'stok' => '49',
            'gambar' => 'companyname.png',
            'kategori_id' => '1',
        ]);
    }
}
