<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengarang;

class PengarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengarang::truncate();
        Pengarang::create([
            'nama' => 'Fida Husna',
            'alamat' => 'Jl.Gatot-Subroto',
        ]);
    }
}
