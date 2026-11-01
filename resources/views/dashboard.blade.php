<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - SinyalKota</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <header class="border-b border-white/10 bg-slate-950/80 backdrop-blur">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 font-semibold">
                <span class="flex size-9 items-center justify-center rounded-xl bg-cyan-400 font-black text-slate-950">S</span>
                SinyalKota
            </a>

            <div class="flex items-center gap-3">
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="rounded-xl border border-cyan-400/30 bg-cyan-400/10 px-4 py-2 text-sm font-semibold text-cyan-300 transition hover:bg-cyan-400/20">
                        Admin
                    </a>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="rounded-xl border border-white/10 px-4 py-2 text-sm font-semibold transition hover:border-rose-400/50 hover:bg-rose-400/10 hover:text-rose-300">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-12 sm:px-6">
        <section class="rounded-3xl border border-white/10 bg-white/[0.06] p-8 shadow-2xl shadow-cyan-950/20">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-400">Dashboard</p>
            <h1 class="mt-3 text-3xl font-bold">Halo, {{ auth()->user()->name }}!</h1>
            <p class="mt-3 text-slate-400">Kamu sudah berhasil masuk ke SinyalKota dengan session login normal.</p>

            <dl class="mt-8 grid gap-4 sm:grid-cols-3">
                <div class="rounded-2xl bg-slate-900/70 p-5">
                    <dt class="text-sm text-slate-500">Nama</dt>
                    <dd class="mt-1 font-semibold">{{ auth()->user()->name }}</dd>
                </div>
                <div class="rounded-2xl bg-slate-900/70 p-5">
                    <dt class="text-sm text-slate-500">Email</dt>
                    <dd class="mt-1 font-semibold">{{ auth()->user()->email }}</dd>
                </div>
                <div class="rounded-2xl bg-slate-900/70 p-5">
                    <dt class="text-sm text-slate-500">Hak akses</dt>
                    <dd class="mt-1 font-semibold">{{ auth()->user()->role->label() }}</dd>
                </div>
            </dl>
        </section>
    </main>
</body>
</html>
