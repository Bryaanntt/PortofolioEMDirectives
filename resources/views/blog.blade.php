@extends('layouts.app')

@section('title', 'Blog - Elon Musk')

@section('content')
<section class="py-16" x-data="{
    posts: [
        @foreach($posts as $post)
            { judul: '{{ $post['judul'] }}', isi: '{{ $post['isi'] }}' },
        @endforeach
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