<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - SinyalKota</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <header class="border-b border-white/10 bg-slate-950/80 backdrop-blur">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 font-semibold">
                <span class="flex size-9 items-center justify-center rounded-xl bg-amber-400 font-black text-slate-950">A</span>
                Admin SinyalKota
            </a>
            <a href="{{ route('dashboard') }}" class="rounded-xl border border-white/10 px-4 py-2 text-sm font-semibold transition hover:bg-white/10">
                Kembali ke dashboard
            </a>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-12 sm:px-6">
        <section class="rounded-3xl border border-amber-400/20 bg-amber-400/[0.06] p-8">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-400">Admin stub</p>
            <h1 class="mt-3 text-3xl font-bold">Panel admin sudah siap</h1>
            <p class="mt-3 max-w-2xl text-slate-400">
                Halaman ini baru menjadi fondasi akses admin. Pengelolaan kasus, pengguna, dan moderasi dapat ditambahkan nanti saat kebutuhannya sudah jelas.
            </p>
        </section>
    </main>
</body>
</html>
