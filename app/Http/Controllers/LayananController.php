<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function show($slug)
    {
        $settings = Settings::pluck('value', 'key')->all();
        
        $layanan = [
            'konsultasi' => [
                'title' => 'Konsultasi Teknologi',
                'icon' => 'fa-regular fa-handshake',
                'description' => 'Layanan konsultasi teknologi kami membantu bisnis Anda mengoptimalkan penggunaan teknologi informasi.',
                'features' => [
                    'Analisis Kebutuhan IT',
                    'Perencanaan Strategis IT',
                    'Audit Sistem & Infrastruktur',
                    'Optimasi Proses Bisnis',
                    'Konsultasi Keamanan IT',
                    'Transformasi Digital'
                ],
                'benefits' => [
                    'Solusi yang tepat sesuai kebutuhan',
                    'Efisiensi biaya IT',
                    'Peningkatan produktivitas',
                    'Keamanan sistem terjamin',
                    'Roadmap teknologi yang jelas'
                ]
            ],
            'software' => [
                'title' => 'Software Development',
                'icon' => 'fa-solid fa-code',
                'description' => 'Tim developer kami siap membangun aplikasi yang sesuai dengan kebutuhan spesifik bisnis Anda.',
                'features' => [
                    'Aplikasi Web Custom',
                    'Aplikasi Mobile (Android/iOS)',
                    'Sistem Informasi Manajemen',
                    'E-Commerce Solutions',
                    'Integrasi Sistem',
                    'API Development'
                ],
                'benefits' => [
                    'Aplikasi sesuai kebutuhan',
                    'User Interface yang intuitif',
                    'Performa tinggi & scalable',
                    'Dukungan teknis berkelanjutan',
                    'Dokumentasi lengkap'
                ]
            ],
            'infrastruktur' => [
                'title' => 'Infrastruktur Teknologi',
                'icon' => 'fa-solid fa-network-wired',
                'description' => 'Solusi infrastruktur IT yang handal, aman, dan scalable untuk mendukung operasional bisnis Anda.',
                'features' => [
                    'Jaringan & Networking',
                    'Server Management',
                    'Cloud Infrastructure',
                    'Data Center Solutions',
                    'Backup & Recovery',
                    'Network Security'
                ],
                'benefits' => [
                    'Infrastruktur yang handal',
                    'Keamanan data terjamin',
                    'High availability',
                    'Skalabilitas tinggi',
                    'Monitoring 24/7'
                ]
            ],
            'manajemen' => [
                'title' => 'Layanan Manajemen TI',
                'icon' => 'fa-solid fa-list-check',
                'description' => 'Serahkan pengelolaan IT kepada kami dan fokus pada pengembangan bisnis Anda.',
                'features' => [
                    'IT Service Desk',
                    'Asset Management',
                    'Change Management',
                    'Problem Management',
                    'SLA Management',
                    'Vendor Management'
                ],
                'benefits' => [
                    'Operasional IT yang efisien',
                    'Respon cepat untuk masalah IT',
                    'Pengelolaan aset terstruktur',
                    'Peningkatan layanan berkelanjutan',
                    'Laporan performa berkala'
                ]
            ],
            'pelatihan' => [
                'title' => 'Pelatihan dan Sertifikasi',
                'icon' => 'fa-solid fa-graduation-cap',
                'description' => 'Program pelatihan dan sertifikasi untuk meningkatkan kompetensi tim IT Anda.',
                'features' => [
                    'Technical Training',
                    'Security Awareness',
                    'Digital Skills',
                    'Project Management',
                    'IT Best Practices',
                    'Certification Prep'
                ],
                'benefits' => [
                    'Peningkatan skill tim IT',
                    'Sertifikasi internasional',
                    'Materi up-to-date',
                    'Hands-on practice',
                    'Post-training support'
                ]
            ]
        ];

        if (!isset($layanan[$slug])) {
            abort(404);
        }

        $service = $layanan[$slug];
        
        return view('layanan.show', compact('settings', 'service'));
    }
} 