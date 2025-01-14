<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            // ... settings sebelumnya ...
            
            [
                'key' => 'pt1',
                'value' => 'Beranda'
            ],
            [
                'key' => 'pt2',
                'value' => 'Profil'
            ], 
            [
                'key' => 'pt3',
                'value' => 'Portofolio'
            ], 
            [
                'key' => 'pt4',
                'value' => 'Layanan'
            ], 
            [
                'key' => 'pt5',
                'value' => 'Kontak'
            ],
            [
                'key' => 'company_name',
                'value' => 'PT. Digital Raya Fokus'
            ],
            [
                'key' => 'tc1',
                'value' => 'Selamat Datang di PT. Digital Raya Fokus'
            ],
            [
                'key' => 'dc1',
                'value' => 'Mitra terpercaya Anda untuk solusi IT yang inovatif dan profesional.'
            ],
            [
                'key' => 'ic1',
                'value' => 'asset/image1.jpeg'
            ],
            [
                'key' => 'tc2',
                'value' => 'Konsultasikan Kebutuhan Anda dan Dapatkan Solusi Terbaik'
            ],
            [
                'key' => 'dc2',
                'value' => 'Dari pengembangan software hingga konsultasi IT, kami siap menjadi mitra teknologi terpercaya Anda.'
            ],
            [
                'key' => 'ic2',
                'value' => 'asset/image2.jpeg'
            ],
            [
                'key' => 'ic3',
                'value' => 'asset/image2.jpeg'
            ],
            [
                'key' => 'ic4',
                'value' => 'asset/image2.jpeg'
            ],
            [
                'key' => 'company_keywords',
                'value' => 'Digital Raya Fokus, teknologi, transformasi digital, software development, konsultasi teknologi, infrastruktur IT'
            ],
            [
                'key' => 'company_logo', 
                'value' => 'asset/logo.png'
            ],
            [
                'key' => 'company_visi',
                'value' => 'Menjadi perusahaan teknologi informasi terdepan yang memberikan solusi inovatif dan berkelanjutan untuk mendukung transformasi digital di Indonesia.'
            ],
            [
                'key' => 'company_misi',
                'value' => '1) Memberikan layanan TI berkualitas tinggi 2) Mengembangkan solusi digital inovatif 3) Membangun kemitraan jangka panjang 4) Berkontribusi pada ekosistem digital'
            ],
            [
                'key' => 'company_address',
                'value' => 'Jl. Kapten Sarwono No.32, Banjaran Wetan, Kec. Banjaran, Kabupaten Bandung, Jawa Barat 40377'
            ],
            [
                'key' => 'company_description',
                'value' => 'Digital Raya Fokus adalah perusahaan teknologi informasi yang berfokus pada pengembangan solusi digital untuk membantu transformasi bisnis klien. Kami menyediakan layanan pengembangan perangkat lunak, konsultasi IT, dan solusi infrastruktur teknologi.'
            ],
            [
                'key' => 'company_tagline',
                'value' => 'Transformasi Digital untuk Masa Depan Bisnis yang Lebih Baik'
            ],
            [
                'key' => 'index_headline',
                'value' => 'Solusi untuk Segala Kebutuhan Anda'
            ],
            [
                'key' => 'company_about',
                'value' => 'Digital Raya Fokus hadir sebagai mitra teknologi terpercaya yang berkomitmen untuk memberikan solusi digital terbaik dan inovatif bagi setiap klien kami.'
            ],
            [
                'key' => 'company_email',
                'value' => 'info@digitalrayafokus.co.id'
            ],
            [
                'key' => 'company_phone',
                'value' => '+62 22 5946254'
            ],
            [
                'key' => 'company_profile',
                'value' => 'PT Digital Raya Fokus adalah perusahaan teknologi informasi yang berfokus pada penyediaan solusi digital komprehensif untuk mendukung transformasi bisnis. Dengan tim profesional yang berpengalaman, kami berkomitmen menghadirkan layanan berkualitas dalam pengembangan software, konsultasi IT, dan implementasi infrastruktur teknologi.'
            ],
            [
                'key' => 'company_logo',
                'value' => 'asset/logo.png'
            ],
            [
                'key' => 'company_logo2',
                'value' => 'asset/logo2.png'
            ],
            [
                'key' => 'company_logo3',
                'value' => 'asset/logo3.png'
            ],
        ];

        foreach ($settings as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
} 