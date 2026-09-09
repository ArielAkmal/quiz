<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Informasi;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Informasi::create([
            'kategori_id' => 1,
            'judul' => 'Mengenal Artificial Intelligence',
            'ringkasan' => 'Pengenalan singkat mengenai teknologi Artificial Intelligence.',
            'isi' => 'Artificial Intelligence adalah teknologi yang memungkinkan komputer melakukan tugas yang biasanya membutuhkan kecerdasan manusia.',
            'sumber' => 'https://contoh.com',
            'status' => 'published'
        ]);

        Informasi::create([
            'kategori_id' => 1,
            'judul' => 'Perkembangan Teknologi Cloud',
            'ringkasan' => 'Cloud computing semakin banyak digunakan dalam berbagai bidang.',
            'isi' => 'Cloud computing memungkinkan pengguna menyimpan dan mengakses data serta layanan melalui internet.',
            'sumber' => 'https://contoh.com',
            'status' => 'published'
        ]);

        Informasi::create([
            'kategori_id' => 2,
            'judul' => 'Digitalisasi Bisnis',
            'ringkasan' => 'Digitalisasi membantu bisnis meningkatkan efisiensi.',
            'isi' => 'Pemanfaatan teknologi digital dapat membantu perusahaan meningkatkan efisiensi proses bisnis dan pelayanan kepada pelanggan.',
            'sumber' => 'https://contoh.com',
            'status' => 'draft'
        ]);
    }
}
