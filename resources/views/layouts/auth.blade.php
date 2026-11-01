<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'SinyalKota' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <main class="flex min-h-screen items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <a href="{{ route('home') }}" class="mb-8 flex items-center justify-center gap-3 text-xl font-semibold tracking-tight">
                <span class="flex size-10 items-center justify-center rounded-2xl bg-cyan-400 font-black text-slate-950">S</span>
                SinyalKota
            </a>

            <section class="rounded-3xl border border-white/10 bg-white/[0.06] p-6 shadow-2xl shadow-cyan-950/30 backdrop-blur sm:p-8">
                {{ $slot }}
            </section>
        </div>
    </main>
</body>
</html>
