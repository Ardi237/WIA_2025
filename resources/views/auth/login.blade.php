<x-auth-layout title="Masuk - SinyalKota">
    <div class="mb-7">
        <h1 class="text-2xl font-bold">Selamat datang kembali</h1>
        <p class="mt-2 text-sm text-slate-400">Masuk menggunakan email dan password akunmu.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-medium">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="nama@email.com">
            @error('email')<p class="mt-2 text-sm text-rose-400">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-medium">Password</label>
            <input id="password" name="password" type="password" required autocomplete="current-password"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="Masukkan password">
            @error('password')<p class="mt-2 text-sm text-rose-400">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="w-full rounded-xl bg-cyan-400 px-4 py-3 font-bold text-slate-950 transition hover:bg-cyan-300 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:ring-offset-2 focus:ring-offset-slate-950">
            Masuk
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-400">
        Belum punya akun?
        <a href="{{ route('register') }}" class="font-semibold text-cyan-400 hover:text-cyan-300">Daftar sekarang</a>
    </p>
</x-auth-layout>
