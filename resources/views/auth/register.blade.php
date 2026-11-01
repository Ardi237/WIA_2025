<x-auth-layout title="Daftar - SinyalKota">
    <div class="mb-7">
        <h1 class="text-2xl font-bold">Buat akun</h1>
        <p class="mt-2 text-sm text-slate-400">Daftar dengan email dan password. Tidak memerlukan verifikasi.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="mb-2 block text-sm font-medium">Nama</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="Nama lengkap">
            @error('name')<p class="mt-2 text-sm text-rose-400">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="email" class="mb-2 block text-sm font-medium">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="nama@email.com">
            @error('email')<p class="mt-2 text-sm text-rose-400">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-medium">Password</label>
            <input id="password" name="password" type="password" required autocomplete="new-password"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="Minimal 8 karakter">
            @error('password')<p class="mt-2 text-sm text-rose-400">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="password_confirmation" class="mb-2 block text-sm font-medium">Konfirmasi password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 outline-none transition placeholder:text-slate-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                placeholder="Ulangi password">
        </div>

        <button type="submit" class="w-full rounded-xl bg-cyan-400 px-4 py-3 font-bold text-slate-950 transition hover:bg-cyan-300 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:ring-offset-2 focus:ring-offset-slate-950">
            Daftar
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-400">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="font-semibold text-cyan-400 hover:text-cyan-300">Masuk</a>
    </p>
</x-auth-layout>
