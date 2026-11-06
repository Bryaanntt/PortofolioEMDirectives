<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        $companies = [
            ['nama' => 'Tesla',     'deskripsi' => 'Mobil listrik dan penyimpanan energi'],
            ['nama' => 'SpaceX',    'deskripsi' => 'Roket dan satelit'],
            ['nama' => 'Neuralink', 'deskripsi' => 'Chip otak untuk membantu penderita gangguan saraf'],
            ['nama' => 'xAI',       'deskripsi' => 'Pengembangan AI (Grok)'],
        ];

        return view('homepage', ['companies' => $companies]);
    }
}