@extends('layouts.app')

@section('title', 'About - Elon Musk')

@section('content')
<section class="py-16"x-data="{
    @foreach($timeline as $item)
        { tahun: '{{ $item['tahun'] }}', peristiwa: '{{ $item['peristiwa'] }}' },
    }"@endforeach

    <h1 class="mb-8 text-3xl font-bold">About</h1>

    <dl class="grid gap-x-6 gap-y-3 rounded-xl border border-slate-800 bg-slate-900 p-6 sm:grid-cols-[170px_1fr]">
        @foreach ($profil as $label => $nilai)
            <dt class="text-slate-400">{{ $label }}</dt>
            <dd class="font-medium">{{ $nilai }}</dd>
        @endforeach
    </dl>

    <h2 class="mt-12 mb-3 text-xl font-bold">Latar Belakang</h2>
    <p class="text-slate-300">
        Musk tertarik pada komputer sejak kecil dan belajar pemrograman otodidak. Di usia 12 tahun, ia menjual kode game buatannya bernama Blastar. Ia pindah ke Kanada pada usia 17 tahun, lalu melanjutkan kuliah di Amerika Serikat.
    </p>

    <h2 class="mt-12 mb-6 text-xl font-bold">Perjalanan Karier</h2>
    <section>
            <h2 class="section-title">Perjalanan Karier</h2>
            <ol class="space-y-6 border-l-2 border-sky-400 pl-6">
                @foreach ($timeline as $item)
                    <li>
                        <span class="font-bold text-sky-600">{{ $item['tahun'] }}</span>
                        <p>{{ $item['peristiwa'] }}</p>
                    </li>
                @endforeach
            </ol>
    </section>

    <h2 class="mt-12 mb-3 text-xl font-bold">Filosofi Kerja</h2>
    <blockquote class="rounded-r-xl border-l-4 border-sky-400 bg-slate-900 p-5 text-slate-400">
        Musk sering menyebut <strong class="text-slate-100">first principles thinking</strong>, yaitu memecah masalah menjadi fakta paling dasar lalu menyusun solusi dari sana, bukan meniru cara orang lain.
    </blockquote>
</section>
@endsection