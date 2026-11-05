@extends('layouts.app')

@section('title', 'Blog - Elon Musk')

@section('content')
<section class="py-16" x-data="{
    posts: [
        { judul: 'Tesla: Mempopulerkan Mobil Listrik',
            isi: 'Tesla mulai dikenal lewat Roadster pada 2008, lalu Model S, Model 3, Model X, dan Model Y. Tesla membuktikan bahwa mobil listrik bisa cepat, nyaman, dan diminati pasar luas. Perusahaan ini juga mengembangkan baterai, panel surya, dan fitur Autopilot.' },
        { judul: 'SpaceX: Roket yang Bisa Dipakai Ulang',
            isi: 'SpaceX didirikan pada 2002 dengan tujuan menurunkan biaya peluncuran ke luar angkasa. Terobosannya adalah roket Falcon 9 yang tahap pertamanya bisa mendarat kembali dan dipakai lagi. Proyek besar berikutnya adalah Starship untuk misi Bulan dan Mars.' },
        { judul: 'Neuralink: Menghubungkan Otak dan Komputer',
            isi: 'Neuralink mengembangkan implan kecil yang membaca sinyal otak. Tujuan awalnya membantu orang dengan kelumpuhan mengendalikan perangkat digital hanya dengan pikiran.' },
        { judul: 'Visi Multi-Planet',
            isi: 'Musk percaya manusia perlu menjadi spesies multi-planet agar tidak bergantung pada satu planet. Mars menjadi target jangka panjang SpaceX.' }
    ]
}">
    <h1 class="mb-8 text-3xl font-bold">Blog</h1>

    <div class="grid gap-5">
        <template x-for="p in posts" :key="p.judul">
            <article class="rounded-xl border border-slate-800 bg-slate-900 p-6 transition hover:border-sky-400">
                <h2 class="mb-2 text-lg font-semibold" x-text="p.judul"></h2>
                <p class="text-slate-400" x-text="p.isi"></p>
            </article>
        </template>
    </div>
</section>
@endsection