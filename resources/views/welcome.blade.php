<!DOCTYPE html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#087a3d">
    <meta name="description" content="Portal informasi Sistem Informasi Universitas Nahdlatul Ulama Al Ghazali Cilacap.">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo-unugha.jpg') }}">
    <title>Sistem Informasi UNUGHA — Universitas Nahdlatul Ulama Al Ghazali</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 font-sans text-slate-800 antialiased">
    <a href="#home" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:rounded-lg focus:bg-white focus:px-4 focus:py-3 focus:text-emerald-900 focus:shadow-lg">Lewati ke konten utama</a>

    <header class="sticky top-0 z-50 border-b border-emerald-950/10 bg-white/95 shadow-sm backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
            <a href="#home" class="flex min-w-0 items-center gap-3 rounded-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-700 focus-visible:ring-offset-2" aria-label="Sistem Informasi UNUGHA, beranda">
                <span class="flex size-12 shrink-0 items-center justify-center overflow-hidden rounded-xl border border-emerald-100 bg-white p-0.5 shadow-sm">
                    <img src="{{ asset('images/logo-unugha.jpg') }}" alt="Logo Universitas Nahdlatul Ulama Al Ghazali Cilacap" class="size-full rounded-lg object-contain">
                </span>
                <span class="min-w-0">
                    <span class="block truncate text-sm font-extrabold leading-tight text-emerald-950 sm:text-base">Sistem Informasi</span>
                    <span class="mt-0.5 block text-xs font-semibold tracking-wide text-emerald-700">UNUGHA CILACAP</span>
                </span>
            </a>

            <nav class="hidden items-center gap-8 md:flex" aria-label="Navigasi utama">
                <a href="#home" class="text-sm font-semibold text-slate-700 transition hover:text-emerald-700 focus:outline-none focus-visible:underline">Home</a>
                <a href="#katalog" class="text-sm font-semibold text-slate-700 transition hover:text-emerald-700 focus:outline-none focus-visible:underline">Katalog</a>
                <a href="#kontak" class="text-sm font-semibold text-slate-700 transition hover:text-emerald-700 focus:outline-none focus-visible:underline">Kontak</a>
            </nav>

            <div class="hidden md:block">
                <button type="button" data-login-notice class="inline-flex items-center justify-center rounded-full bg-emerald-800 px-5 py-2.5 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-700 focus-visible:ring-offset-2">
                    Login
                </button>
            </div>

            <button type="button" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu" aria-label="Buka menu navigasi" class="inline-flex size-11 items-center justify-center rounded-xl border border-emerald-900/10 text-emerald-950 transition hover:bg-emerald-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-700 md:hidden">
                <svg data-menu-icon-open class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"></path>
                </svg>
                <svg data-menu-icon-close class="hidden size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18"></path>
                </svg>
            </button>
        </div>

        <nav id="mobile-menu" data-mobile-menu class="hidden border-t border-emerald-950/10 bg-white px-4 py-4 md:hidden" aria-label="Navigasi seluler">
            <div class="mx-auto flex max-w-7xl flex-col gap-1 sm:px-2">
                <a href="#home" class="rounded-lg px-3 py-3 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-800">Home</a>
                <a href="#katalog" class="rounded-lg px-3 py-3 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-800">Katalog</a>
                <a href="#kontak" class="rounded-lg px-3 py-3 text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-800">Kontak</a>
                <button type="button" data-login-notice class="mt-2 rounded-lg bg-emerald-800 px-3 py-3 text-left text-sm font-bold text-white hover:bg-emerald-900">Login</button>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="scroll-mt-24 overflow-hidden bg-emerald-800 text-white">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 sm:py-20 lg:grid-cols-[1.15fr_0.85fr] lg:px-8 lg:py-24">
                <div class="relative z-10">
                    <p class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-emerald-50 motion-safe:animate-fade-up motion-safe:delay-100 motion-reduce:animate-none">
                        <span class="size-2 rounded-full bg-amber-300"></span>
                        Universitas Nahdlatul Ulama Al Ghazali
                    </p>
                    <h1 class="max-w-3xl text-4xl font-black leading-tight tracking-tight motion-safe:animate-fade-up motion-safe:delay-200 motion-reduce:animate-none sm:text-5xl lg:text-6xl">
                        Sistem Informasi
                        <span class="mt-1 block text-amber-300">UNUGHA Cilacap</span>
                    </h1>
                    <p class="mt-6 max-w-2xl text-base leading-7 text-emerald-50 motion-safe:animate-fade-up motion-safe:delay-300 motion-reduce:animate-none sm:text-lg sm:leading-8">
                        Satu pintu informasi untuk mengenal layanan akademik, katalog kampus, serta pengumuman Universitas Nahdlatul Ulama Al Ghazali Cilacap.
                    </p>
                    <div class="mt-9 flex flex-col gap-3 motion-safe:animate-fade-up motion-safe:delay-500 motion-reduce:animate-none sm:flex-row">
                        <a href="#katalog" class="inline-flex items-center justify-center gap-2 rounded-full bg-amber-300 px-6 py-3.5 text-sm font-extrabold text-emerald-950 shadow-lg shadow-emerald-950/10 transition hover:bg-amber-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-emerald-800">
                            Jelajahi Katalog
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"></path></svg>
                        </a>
                        <a href="#kontak" class="inline-flex items-center justify-center rounded-full border border-white/40 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                            Informasi Kontak
                        </a>
                    </div>
                    <div class="mt-8 flex flex-wrap items-center gap-3 motion-safe:animate-fade-up motion-safe:delay-700 motion-reduce:animate-none"><p class="text-sm text-emerald-100">Bersama membangun pendidikan dan masa depan.</p><span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-2 text-xs font-semibold text-emerald-50"><span class="size-1.5 rounded-full bg-amber-300"></span><span>Visualizing Technology</span><span class="hidden text-emerald-200 sm:inline">· Mengubah ide teknologi menjadi karya visual</span></span></div>
                </div>

                <div class="relative mx-auto w-full max-w-md">
                    <div class="absolute -right-8 -top-8 size-32 rounded-full bg-amber-300/20 blur-2xl motion-safe:animate-glow motion-reduce:animate-none" aria-hidden="true"></div>
                    <div class="absolute -bottom-10 -left-8 size-40 rounded-full bg-lime-300/20 blur-3xl motion-safe:animate-glow motion-reduce:animate-none" aria-hidden="true"></div>
                    <div class="relative rounded-[2rem] border border-white/20 bg-white/10 p-4 shadow-2xl shadow-emerald-950/20 backdrop-blur-sm motion-safe:animate-float motion-reduce:animate-none sm:p-6">
                        <div class="rounded-[1.5rem] bg-white p-5 text-center shadow-xl sm:p-8">
                            <img src="{{ asset('images/logo-unugha.jpg') }}" alt="Lambang resmi UNUGHA Cilacap" class="mx-auto aspect-square w-44 rounded-2xl object-contain sm:w-56">
                            <p class="mt-5 text-xs font-extrabold uppercase tracking-[0.2em] text-emerald-700">UNUGHA • CILACAP</p>
                            <p class="mt-2 text-lg font-black text-emerald-950 sm:text-xl">Kampus untuk masa depan</p>
                        </div>
                        <div class="mt-4 flex items-center justify-center gap-2 rounded-2xl border border-white/10 bg-emerald-950/20 px-4 py-3 text-sm font-semibold text-emerald-50">
                            <svg class="size-5 shrink-0 text-amber-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="m12 2 2.2 6.8H21l-5.5 4 2.1 6.8-5.6-4.2-5.6 4.2 2.1-6.8L3 8.8h6.8L12 2Z"></path></svg>
                            Informasi kampus dalam satu halaman
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="katalog" class="scroll-mt-24 py-16 sm:py-20 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-emerald-700">Jelajahi UNUGHA</p>
                    <h2 class="mt-3 text-3xl font-black tracking-tight text-emerald-950 sm:text-4xl">Informasi kampus lebih dekat</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600">Temukan informasi penting seputar kegiatan dan lingkungan kampus melalui tiga kategori utama.</p>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="group motion-safe:animate-fade-up motion-safe:delay-100 motion-reduce:animate-none rounded-3xl border border-emerald-950/10 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-emerald-700/30 hover:shadow-xl hover:shadow-emerald-950/5">
                        <div class="flex size-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-800 transition group-hover:bg-emerald-800 group-hover:text-white">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path><path stroke-linecap="round" d="M8 7h8M8 11h8"></path></svg>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-emerald-950">Layanan Akademik</h3>
                        <p class="mt-3 leading-7 text-slate-600">Informasi layanan akademik, administrasi perkuliahan, dan panduan kegiatan belajar bagi sivitas kampus.</p>
                        <a href="#kontak" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:text-emerald-950 focus:outline-none focus-visible:underline">
                            Pelajari lebih lanjut <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="group motion-safe:animate-fade-up motion-safe:delay-200 motion-reduce:animate-none rounded-3xl border border-emerald-950/10 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-emerald-700/30 hover:shadow-xl hover:shadow-emerald-950/5">
                        <div class="flex size-14 items-center justify-center rounded-2xl bg-amber-50 text-amber-700 transition group-hover:bg-amber-400 group-hover:text-emerald-950">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"></path><path stroke-linecap="round" stroke-linejoin="round" d="M9 9v.01M9 12v.01M9 15v.01M9 18v.01M15 13v.01M15 16v.01M15 19v.01"></path></svg>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-emerald-950">Katalog Kampus</h3>
                        <p class="mt-3 leading-7 text-slate-600">Kenali lingkungan kampus, program studi, fasilitas, dan beragam layanan yang mendukung kehidupan mahasiswa.</p>
                        <a href="#kontak" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:text-emerald-950 focus:outline-none focus-visible:underline">
                            Pelajari lebih lanjut <span aria-hidden="true">→</span>
                        </a>
                    </article>

                    <article class="group motion-safe:animate-fade-up motion-safe:delay-300 motion-reduce:animate-none rounded-3xl border border-emerald-950/10 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-emerald-700/30 hover:shadow-xl hover:shadow-emerald-950/5 md:col-span-2 lg:col-span-1">
                        <div class="flex size-14 items-center justify-center rounded-2xl bg-lime-50 text-lime-800 transition group-hover:bg-lime-600 group-hover:text-white">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19 3v3M20.5 4.5h-3"></path></svg>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-emerald-950">Informasi &amp; Pengumuman</h3>
                        <p class="mt-3 leading-7 text-slate-600">Ikuti informasi kegiatan, agenda perkuliahan, dan pengumuman terbaru yang perlu diketahui warga kampus.</p>
                        <a href="#kontak" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:text-emerald-950 focus:outline-none focus-visible:underline">
                            Pelajari lebih lanjut <span aria-hidden="true">→</span>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section id="kontak" class="scroll-mt-24 border-y border-emerald-950/10 bg-emerald-50">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-12 sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-emerald-700">Kontak &amp; Informasi</p>
                    <h2 class="mt-2 text-2xl font-black tracking-tight text-emerald-950 sm:text-3xl">Ada yang ingin Anda ketahui?</h2>
                    <p class="mt-3 leading-7 text-slate-600">Untuk informasi resmi mengenai layanan kampus, silakan gunakan kanal komunikasi Universitas Nahdlatul Ulama Al Ghazali Cilacap.</p>
                </div>
                <a href="#home" class="inline-flex shrink-0 items-center justify-center rounded-full border border-emerald-800 px-5 py-3 text-sm font-bold text-emerald-900 transition hover:bg-emerald-800 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-700 focus-visible:ring-offset-2">
                    Kembali ke atas
                    <svg class="ml-2 size-4 -rotate-90" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"></path></svg>
                </a>
            </div>
        </section>
    </main>

    <div data-login-status role="status" aria-live="polite" class="fixed bottom-4 left-4 right-4 z-[60] hidden rounded-2xl border border-emerald-200 bg-white px-5 py-4 text-sm font-semibold text-emerald-950 shadow-2xl sm:left-auto sm:right-6 sm:max-w-sm">
        Akses login belum diaktifkan pada halaman tugas ini.
    </div>

    <footer class="bg-emerald-950 text-emerald-100">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-7 text-sm sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
            <p class="font-bold text-white">Sistem Informasi UNUGHA</p>
            <p>&copy; {{ date('Y') }} Universitas Nahdlatul Ulama Al Ghazali Cilacap · Tugas Pemrograman Web</p>
        </div>
    </footer>
</body>
</html>
