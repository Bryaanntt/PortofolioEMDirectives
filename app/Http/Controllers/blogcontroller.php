<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{ 
    public function blog()
    {
        $posts = [
            ['judul' => 'Mengenal Elon Musk', 'isi' => 'Elon Musk adalah seorang pengusaha dan inovator terkenal yang dikenal karena perannya dalam mendirikan perusahaan-perusahaan teknologi terkemuka seperti Tesla, SpaceX, Neuralink, dan xAI.'],
            ['judul' => 'Perjalanan Karier Elon Musk', 'isi' => 'Elon Musk memulai kariernya dengan mendirikan Zip2, kemudian X.com yang menjadi PayPal, dan akhirnya mendirikan SpaceX dan bergabung dengan Tesla.'],
            ['judul' => 'Inovasi dan Teknologi', 'isi' => 'Elon Musk dikenal karena inovasinya dalam bidang transportasi listrik, eksplorasi luar angkasa, kecerdasan buatan, dan teknologi chip otak.'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}