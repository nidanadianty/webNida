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
        $ekstrakulikuler = [
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ec.BQTqDsuh.jpg',
                'judul' => 'English Club',
                'deskripsi' => 'Melatih kemampuan berbahasa Inggris melalui diskusi, debat, dan kegiatan interaktif lainnya.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pd.BUD6DakP.jpg',
                'judul' => 'Perisai Diri',
                'deskripsi' => 'Ekstrakurikuler seni bela diri tradisional untuk melatih fisik dan mental sekaligus menjaga warisan budaya.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bskt.c2-G4Eus.jpg',
                'judul' => 'Basket',
                'deskripsi' => ' Melatih kemampuan fisik, strategi, dan kerjasama tim melalui olahraga basket.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/futsal.BLhIBqzK.jpg',
                'judul' => 'Futsal',
                'deskripsi' => 'Membentuk sportivitas, ketangkasan, dan kebugaran siswa melalui futsal.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pramuk.DwXMHsR8.jpg',
                'judul' => 'Pramuka',
                'deskripsi' => 'Membentuk kedisiplinan, kepemimpinan, dan jiwa sosial melalui kegiatan pramuka.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/bultang.dnbauifs.jpg',
                'judul' => 'Bulu Tangkis',
                'deskripsi' => 'Meningkatkan kemampuan bermain bulu tangkis sambil menjaga kesehatan dan semangat sportivitas.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/cineam.BSgSd7Nd.jpg',
                'judul' => 'Cinematografi',
                'deskripsi' => 'Mengajarkan seni pembuatan film, mulai dari pengambilan gambar, editing, hingga produksi video kreatif.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/pmr.BOmGoy_Q.jpg',
                'judul' => 'PMR',
                'deskripsi' => 'Melatih siswa untuk siap siaga dalam memberikan pertolongan pertama dan kegiatan kemanusiaan.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ks.CXv3QUJt.jpg',
                'judul' => 'PKS',
                'deskripsi' => 'Menanamkan disiplin dan tanggung jawab untuk menjaga ketertiban di lingkungan sekolah.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/paskib.D4NzW5Pg.jpg',
                'judul' => 'Paskibra',
                'deskripsi' => 'Melatih keterampilan baris-berbaris serta menanamkan semangat kebangsaan dan kedisiplinan.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/seni.Vv4aX6zv.jpg',
                'judul' => 'Seni',
                'deskripsi' => 'Mengeksplorasi bakat seni siswa, seperti tari, musik, dan teater.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/plh.BJVb1d8R.jpg',
                'judul' => 'PLH',
                'deskripsi' => 'Mengedukasi tentang pelestarian lingkungan melalui berbagai kegiatan ramah lingkungan.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/laskar.CeBn1OtK.jpg',
                'judul' => 'Laskar Pustaka',
                'deskripsi' => 'Membentuk sportivitas, ketangkasan, dan kebugaran siswa melalui futsal.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/sepak.Bn50BOOv.jpg',
                'judul' => 'Sepak Bola',
                'deskripsi' => 'Mengembangkan keterampilan bermain sepak bola sambil meningkatkan daya tahan fisik dan kerjasama tim.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/voli.CWmBNJvq.jpg',
                'judul' => 'Voli',
                'deskripsi' => 'Melatih kemampuan bermain voli dengan fokus pada teknik dan kerja sama tim.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/boxi.B17rqw08.jpg',
                'judul' => 'Boxing',
                'deskripsi' => 'Melatih teknik tinju untuk kebugaran fisik, kepercayaan diri, dan pengendalian diri.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/rohis.D44E_ZGr.jpg',
                'judul' => 'Irma',
                'deskripsi' => 'Menanamkan nilai-nilai keagamaan Islam melalui kajian, diskusi, dan kegiatan ibadah bersama.',
            ],
            [
                'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/it.BYa_G51_.jpg',
                'judul' => 'IT Club',
                'deskripsi' => 'Mengembangkan keterampilan teknologi informasi, termasuk pemrograman, desain grafis, dan jaringan.',
            ]
            
        ];

        DB::table('ekstrakulikulers')->insert($ekstrakulikuler);
    }
}
