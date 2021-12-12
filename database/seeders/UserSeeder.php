<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Revivla',
            'nomor' => '08214123256',
            'alamat' => 'Jl. Malang kota',
            'profil' => 'product-2.png',
            'level' => 'admin',
            'email' => 'revivla@gmail.com',
            'password' => bcrypt('revivla'),
            'remember_token' => Str::random(60),
        ]);
    }
}
