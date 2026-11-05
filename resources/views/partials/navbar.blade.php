<nav x-data="{ open: false }" class="sticky top-0 z-20 border-b border-slate-800 bg-slate-950/90 backdrop-blur">
    <div class="mx-auto flex h-16 max-w-4xl items-center justify-between px-5">

        <a href="{{ route('homepage') }}" class="font-bold tracking-widest">ELON MUSK</a>

        <div class="hidden gap-6 text-sm sm:flex">
            <a href="{{ route('homepage') }}"
                class="border-b-2 py-1 transition hover:text-sky-400 {{ request()->routeIs('homepage') ? 'border-sky-400 text-sky-400' : 'border-transparent text-slate-400' }}">Home</a>
            <a href="{{ route('about') }}"
                class="border-b-2 py-1 transition hover:text-sky-400 {{ request()->routeIs('about') ? 'border-sky-400 text-sky-400' : 'border-transparent text-slate-400' }}">About</a>
            <a href="{{ route('blog') }}"
                class="border-b-2 py-1 transition hover:text-sky-400 {{ request()->routeIs('blog') ? 'border-sky-400 text-sky-400' : 'border-transparent text-slate-400' }}">Blog</a>
        </div>  

        <button @click="open = !open" class="text-2xl text-slate-300 sm:hidden" aria-label="Menu">
            <span x-text="open ? '✕' : '☰'"></span>
        </button>
    </div>

    <div x-show="open" x-cloak @click.outside="open = false" class="border-t border-slate-800 sm:hidden">
        <div class="mx-auto flex max-w-4xl flex-col gap-1 px-5 py-3 text-sm">
            <a href="{{ route('homepage') }}" class="py-2 {{ request()->routeIs('homepage') ? 'text-sky-400' : 'text-slate-400' }}">Home</a>
            <a href="{{ route('about') }}"    class="py-2 {{ request()->routeIs('about') ? 'text-sky-400' : 'text-slate-400' }}">About</a>
            <a href="{{ route('blog') }}"     class="py-2 {{ request()->routeIs('blog') ? 'text-sky-400' : 'text-slate-400' }}">Blog</a>
        </div>
    </div>
</nav>