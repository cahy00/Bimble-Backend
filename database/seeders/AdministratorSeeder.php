<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
					'name' => 'Administrator',
					'email' => 'admin@bimble-online.test',
					'email_verified_at' => now(),
					'password' => Hash::make('admin'),
					'level' => 'admin',
					'gender' => 'pria',
					'address' => 'Kota Solo',
					'phone' => '081233233822',
					'avatar' => 'none.jpg',
				]);
				$this->command->info('Data Berhasil Ditambahkan');
    }
}
