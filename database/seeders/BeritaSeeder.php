<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $berita = [
            [
                'gambar' => 'https://newstasikmalaya.com/storage/kapolsek-cibeureum-berikan-penyuluhan.jpg',
                'judul' => 'Kapolsek Cibeureum Berikan Penyuluhan tentang Larangan Knalpot Brong dan Geng Motor di SMKN 4 Tasikmalaya',
                'link' => 'https://newstasikmalaya.com/kapolsek-cibeureum-berikan-penyuluhan-tentang-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya',
            ],
            [
                'gambar' => 'https://asset-2.tribunnews.com/priangan/foto/bank/images/peresmian-SRL-Astra-Honda.jpg',
                'judul' => 'Astra Honda Resmikan Safety Riding Lab ke-7 di SMKN 4 Tasikmalaya, Kampanye Keselamatan Berkendara',
                'link' => 'https://priangan.tribunnews.com/2024/05/20/astra-honda-resmikan-safety-riding-lab-ke-7-di-smkn-4-tasikmalaya-tingkatkan-keselamatan-berkendara',
            ],
            [
                'gambar' => 'https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/03/02/IMG_20230302_120715-2211547420.jpg',
                'judul' => 'Sinergi Bagi Negeri, DAM Jalin Kerjasama Dengan SMKN 4 Tasikmalaya',
                'link' => 'https://www.ayotasik.com/berita-tasik/337810758/sinergi-bagi-negeri-dam-jalin-kerjasama-dengan-smkn-4-tasikmalaya',
            ],
            [
                'gambar' => 'https://assets.radartasik.id/main/2023/03/Expo-Creanova-1-1200x675.webp',
                'judul' => 'Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo Creanova',
                'link' => 'btn btn-success" href="https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/#google_vignette'
            ]
        ];

        DB::table('beritas')->insert($berita);
    }
}
