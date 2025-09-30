<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekstrakulikulerlist = [

            //CARD 1
            [
                'judul' => 'English Club',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ec.BQTqDsuh.jpg',
                'deskripsi' => 'Melatih kemampuan berbahasa Inggris melalui diskusi, debat, dan kegiatan interaktif lainnya.',
            ],
            //CARD 2
            [
                'judul' => 'Perisai Diri',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bskt.c2-G4Eus.jpg',
                'deskripsi' => 'Ekstrakurikuler seni bela diri tradisional untuk melatih fisik dan mental sekaligus menjaga warisan budaya.',
            ],
            //CARD 3
            [
                'judul' => 'Basket',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ec.BQTqDsuh.jpg',
                'deskripsi' => 'Melatih kemampuan fisik, strategi, dan kerjasama tim melalui olahraga basket.',
            ],
            //CARD 4
            [
                'judul' => 'Futsal',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/futsal.BLhIBqzK.jpg',
                'deskripsi' => 'Membentuk sportivitas, ketangkasan, dan kebugaran siswa melalui futsal.',
            ],
            //CARD 5
            [
                'judul' => 'Pramuka',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pramuk.DwXMHsR8.jpg',
                'deskripsi' => ' Membentuk kedisiplinan, kepemimpinan, dan jiwa sosial melalui kegiatan pramuka.',
            ],
            //CARD 6
            [
                'judul' => 'Bulu Tangkis',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bultang.dnbauifs.jp',
                'deskripsi' => 'Meningkatkan kemampuan bermain bulu tangkis sambil menjaga kesehatan dan semangat sportivitas.',
            ],
            //CARD 7
            [
                'judul' => 'Cinematografi',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/cineam.BSgSd7Nd.jpg',
                'deskripsi' => 'Mengajarkan seni pembuatan film, mulai dari pengambilan gambar, editing, hingga produksi video kreatif.',
            ],
            //CARD 8
            [
                'judul' => 'PMR',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pmr.BOmGoy_Q.jpg',
                'deskripsi' => 'Melatih siswa untuk siap siaga dalam memberikan pertolongan pertama dan kegiatan kemanusiaan.',
            ],
            //CARD 9
            [
                'judul' => 'PKS',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ks.CXv3QUJt.jpg',
                'deskripsi' => 'Menanamkan disiplin dan tanggung jawab untuk menjaga ketertiban di lingkungan sekolah.',
            ],
            //CARD 10
            [
                'judul' => 'Paskibra',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/paskib.D4NzW5Pg.jpg',
                'deskripsi' => 'Melatih keterampilan baris-berbaris serta menanamkan semangat kebangsaan dan kedisiplinan.',
            ],
            //CARD 11
            [
                'judul' => 'PLH',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/plh.BJVb1d8R.jpg',
                'deskripsi' => 'Mengedukasi tentang pelestarian lingkungan melalui berbagai kegiatan ramah lingkungan.',
            ],
            //CARD 12
            [
                'judul' => 'Seni',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/seni.Vv4aX6zv.jpg',
                'deskripsi' => 'Mengeksplorasi bakat seni siswa, seperti tari, musik, dan teater.',
            ],
            //CARD 13
            [
                'judul' => 'Laskar Pustaka',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/laskar.CeBn1OtK.jpg',
                'deskripsi' => ' Membentuk sportivitas, ketangkasan, dan kebugaran siswa melalui futsal.',
            ],
            //CARD 14
            [
                'judul' => 'Sepak Bola',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/sepak.Bn50BOOv.jpg',
                'deskripsi' => 'Mengembangkan keterampilan bermain sepak bola sambil meningkatkan daya tahan fisik dan kerjasama tim.',
            ],
            //CARD 15
            [
                'judul' => 'Voli',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/voli.CWmBNJvq.jpg',
                'deskripsi' => 'Melatih kemampuan bermain voli dengan fokus pada teknik dan kerja sama tim.',
            ],
            //CARD 16
            [
                'judul' => 'Boxing',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/boxi.B17rqw08.jpg',
                'deskripsi' => 'Melatih teknik tinju untuk kebugaran fisik, kepercayaan diri, dan pengendalian diri.',
            ],
            //CARD 17
            [
                'judul' => 'IRMA',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/rohis.D44E_ZGr.jpg',
                'deskripsi' => 'Menanamkan nilai-nilai keagamaan Islam melalui kajian, diskusi, dan kegiatan ibadah bersama.',
            ],
            //CARD 18
            [
                'judul' => 'IT Club',
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/it.BYa_G51_.jpg',
                'deskripsi' => 'Mengembangkan keterampilan teknologi informasi, termasuk pemrograman, desain grafis, dan jaringan.',
            ]
        ];

        DB::table('ekstrakulikulers')->insert($ekstrakulikulerlist);
    }
}
