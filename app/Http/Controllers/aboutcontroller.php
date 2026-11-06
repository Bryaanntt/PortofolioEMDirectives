<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        $profil = [
            'Nama lengkap'     => 'Elon Reeve Musk',
            'Lahir'            => '28 Juni 1971, Pretoria, Afrika Selatan',
            'Kewarganegaraan'  => 'Amerika Serikat (sebelumnya Afrika Selatan dan Kanada)',
            'Pendidikan'       => 'University of Pennsylvania, Fisika (dan Ekonomi)',
        ];

        $timeline = [
            ['tahun' => '1995', 'peristiwa' => 'Mendirikan Zip2 (software peta dan direktori bisnis)'],
            ['tahun' => '1999', 'peristiwa' => 'Mendirikan X.com, yang kemudian menjadi PayPal'],
            ['tahun' => '2002', 'peristiwa' => 'PayPal dibeli eBay; Musk mendirikan SpaceX'],
            ['tahun' => '2004', 'peristiwa' => 'Masuk Tesla sebagai investor dan chairman'],
            ['tahun' => '2008', 'peristiwa' => 'Menjadi CEO Tesla'],
            ['tahun' => '2012', 'peristiwa' => 'Dragon milik SpaceX menjadi pesawat swasta pertama yang bersandar di ISS'],
            ['tahun' => '2016', 'peristiwa' => 'Mendirikan Neuralink dan The Boring Company'],
            ['tahun' => '2022', 'peristiwa' => 'Mengakuisisi Twitter, lalu mengganti namanya menjadi X'],
            ['tahun' => '2023', 'peristiwa' => 'Mendirikan xAI'],
        ];

        return view('about', compact('profil', 'timeline'));
    }
}