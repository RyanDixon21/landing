<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $settings = Settings::pluck('value', 'key')->all();
        
        $defaultSettings = [
            'company_name' => 'PT. Digital Raya Fokus',
            'company_tagline' => 'Mitra terpercaya Anda untuk solusi IT yang inovatif',
            'company_description' => 'PT Digital Raya Fokus adalah perusahaan teknologi informasi yang berfokus pada penyediaan solusi digital',
            'company_keywords' => 'IT, Software, Digital Transformation',
            'company_logo' => 'asset/logo.png',
            'company_favicon' => 'asset/logo.png'
        ];

        $settings = array_merge($defaultSettings, $settings);

        return view('index', compact('settings'));
    }
}
