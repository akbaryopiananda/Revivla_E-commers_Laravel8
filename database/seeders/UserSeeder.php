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
        User::insert([
            'name' => 'Akbar Sabila Yopiananda',
            'nomor' => '089677563081',
            'alamat' => 'Jepara, Jawa Tengah Indonesia',
            'profil' => 'akyp.png',
            'level' => 'admin',
            'email' => 'revivla@gmail.com',
            'password' => bcrypt('revivla'),
            'remember_token' => Str::random(60),
        ]);
    }
}
