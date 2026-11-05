@extends('layouts.app')

@section('title', 'About - Elon Musk')

@section('content')
<section class="py-16" x-data="{
    timeline: [
        { tahun: 1995, acara: 'Mendirikan Zip2 (software peta dan direktori bisnis)' },
        { tahun: 1999, acara: 'Mendirikan X.com, yang kemudian menjadi PayPal' },
        { tahun: 2002, acara: 'PayPal dibeli eBay; Musk mendirikan SpaceX' },
        { tahun: 2004, acara: 'Masuk Tesla sebagai investor dan chairman' },
        { tahun: 2008, acara: 'Menjadi CEO Tesla' },
        { tahun: 2012, acara: 'Dragon milik SpaceX menjadi pesawat swasta pertama yang bersandar di ISS' },
        { tahun: 2016, acara: 'Mendirikan Neuralink dan The Boring Company' },
        { tahun: 2022, acara: 'Mengakuisisi Twitter, lalu mengganti namanya menjadi X' },
        { tahun: 2023, acara: 'Mendirikan xAI' }
    ]
}">
    <h1 class="mb-8 text-3xl font-bold">About</h1>

    <dl class="grid gap-x-6 gap-y-3 rounded-xl border border-slate-800 bg-slate-900 p-6 sm:grid-cols-[170px_1fr]">
        <dt class="text-slate-400">Nama lengkap</dt>
        <dd class="font-medium">Elon Reeve Musk</dd>

        <dt class="text-slate-400">Lahir</dt>
        <dd class="font-medium">28 Juni 1971, Pretoria, Afrika Selatan</dd>

        <dt class="text-slate-400">Kewarganegaraan</dt>
        <dd class="font-medium">Amerika Serikat (sebelumnya Afrika Selatan dan Kanada)</dd>

        <dt class="text-slate-400">Pendidikan</dt>
        <dd class="font-medium">University of Pennsylvania, Fisika (dan Ekonomi)</dd>
    </dl>

    <h2 class="mt-12 mb-3 text-xl font-bold">Latar Belakang</h2>
    <p class="text-slate-300">
        Musk tertarik pada komputer sejak kecil dan belajar pemrograman otodidak. Di usia 12 tahun, ia menjual kode game buatannya bernama Blastar. Ia pindah ke Kanada pada usia 17 tahun, lalu melanjutkan kuliah di Amerika Serikat.
    </p>

    <h2 class="mt-12 mb-6 text-xl font-bold">Perjalanan Karier</h2>
    <ol class="ml-3 border-l-2 border-slate-800">
        <template x-for="t in timeline" :key="t.tahun">
            <li class="relative pb-6 pl-6 last:pb-0">
                <span class="absolute -left-[7px] top-2 h-3 w-3 rounded-full bg-sky-400"></span>
                <span class="font-semibold text-sky-400" x-text="t.tahun"></span>
                <p class="text-slate-300" x-text="t.acara"></p>
            </li>
        </template>
    </ol>

    <h2 class="mt-12 mb-3 text-xl font-bold">Filosofi Kerja</h2>
    <blockquote class="rounded-r-xl border-l-4 border-sky-400 bg-slate-900 p-5 text-slate-400">
        Musk sering menyebut <strong class="text-slate-100">first principles thinking</strong>, yaitu memecah masalah menjadi fakta paling dasar lalu menyusun solusi dari sana, bukan meniru cara orang lain.
    </blockquote>
</section>
@endsection