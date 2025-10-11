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
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/hutri1.CK4XGipI.png=3',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/hutri4.n3LONpmG.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/hutri3.CGkDK8sb.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/mpls1.DwNqnuoX.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/mpls2.CmrH-vUm.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/mpls5.iNSKAfZF.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/porseni3.BeUFxNND.png',
                
            ],
            [
                'gambar' => 'https://smkn4tsm-frida.vercel.app/_nuxt/hutri5.DKAQINHm.png',
                
            ]
        ];

            DB::table('galeris')->insert($galeri);
    }
     
}
