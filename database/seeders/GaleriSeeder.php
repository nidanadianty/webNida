<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galeri = [
            [
                'gambar' => 'https://tse1.mm.bing.net/th/id/OIP.EFLCcle1u4WOoQwnap7elQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3',
                
            ],
            [
                'gambar' => 'https://tse3.mm.bing.net/th/id/OIP.MEncH6oEtGUvjlapJK5kgQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3',
                
            ],
            [
                'gambar' => 'https://tse4.mm.bing.net/th/id/OIP.8YBSXcjEsDolJXC4WliAyAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3',
                
            ],
            [
                'gambar' => 'https://radartasik.id/wp-content/uploads/2024/05/Duta-Safety-Riding-SMKN-4-Tasikmalaya-.webp',
                
            ],
            [
                'gambar' => 'https://radartasik.id/wp-content/uploads/2024/05/Duta-Safety-Riding-SMKN-4-Tasikmalaya-.webp',
                
            ],
            [
                'gambar' => 'https://radartasik.id/wp-content/uploads/2024/05/Duta-Safety-Riding-SMKN-4-Tasikmalaya-.webp',
                
            ],
            [
                'gambar' => 'https://radartasik.id/wp-content/uploads/2024/05/Duta-Safety-Riding-SMKN-4-Tasikmalaya-.webp',
                
            ],
            [
                'gambar' => 'https://radartasik.id/wp-content/uploads/2024/05/Duta-Safety-Riding-SMKN-4-Tasikmalaya-.webp',
                
            ]
        ];

            DB::table('galeris')->insert($galeri);
    }
     
}
