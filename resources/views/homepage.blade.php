@extends('layouts.app')

@section('title', 'Home - Elon Musk')

@section('content')
<section class="py-16" x-data="{
    companies: [
        { nama: 'Tesla',     desc: 'Mobil listrik dan penyimpanan energi.' },
        { nama: 'SpaceX',    desc: 'Roket dan satelit.' },
        { nama: 'Neuralink', desc: 'Chip otak untuk membantu penderita gangguan saraf.' },
        { nama: 'xAI',       desc: 'Pengembangan AI (Grok).' }
    ]
}">

    <div class="text-center">
        <h1 class="text-5xl font-extrabold sm:text-7xl">Elon Musk</h1>
        <p class="mt-3 text-lg tracking-[0.25em] text-sky-400">ENTREPRENEUR · ENGINEER · VISIONARY</p>
        <p class="mx-auto mt-6 max-w-2xl text-slate-400">
            Elon Musk adalah pengusaha dan insinyur kelahiran Afrika Selatan yang dikenal lewat perusahaan-perusahaan di bidang kendaraan listrik, penerbangan luar angkasa, kecerdasan buatan, dan teknologi otak. Visinya adalah membuat manusia bisa hidup di planet lain dan mempercepat peralihan dunia ke energi berkelanjutan.
        </p>
    </div>

    <h2 class="mt-16 mb-6 text-2xl font-bold">Perusahaan Utama</h2>
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <template x-for="c in companies" :key="c.nama">
            <div class="rounded-xl border border-slate-800 bg-slate-900 p-5 transition hover:-translate-y-1 hover:border-sky-400">
                <h3 class="mb-2 font-semibold text-sky-400" x-text="c.nama"></h3>
                <p class="text-sm text-slate-400" x-text="c.desc"></p>
            </div>
        </template>
    </div>
</section>
@endsection