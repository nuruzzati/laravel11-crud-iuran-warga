<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warga;
use App\Models\Pembayaran;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Warga::create([
            'nama' => 'syarif',
            'alamat' => 'kp kertamulya',
        ]);
        Pembayaran::create([
            'jumlah' => 10000,
            'warga_id' => 1,
            'tanggal' => '2024-08-12',
        ]);
    }
}
