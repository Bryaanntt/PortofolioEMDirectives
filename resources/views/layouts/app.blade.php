<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Elon Musk')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-950 text-slate-100 antialiased leading-relaxed">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Isi halaman --}}
    <main class="mx-auto max-w-4xl px-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>