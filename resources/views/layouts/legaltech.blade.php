<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'TECHSOFT 2026 Legal-Tech')</title>
        <meta
            name="description"
            content="Legal-tech web application for TECHSOFT 2026 under the INNOVATE theme and Social subtheme."
        >
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="min-h-screen lg:grid lg:grid-cols-[20rem_minmax(0,1fr)]">
            <aside class="border-b-2 border-[var(--color-line)] bg-[var(--color-surface)] lg:min-h-screen lg:border-b-0 lg:border-r-2">
                <div class="sticky top-0 flex flex-col gap-8 p-6 md:p-8">
                    <div class="space-y-4">
                        <p class="section-kicker">TECHSOFT 2026</p>
                        <a href="{{ route('home') }}" class="block font-[var(--font-display)] text-3xl font-bold uppercase tracking-[-0.08em] md:text-5xl">
                            Lex
                            <br>
                            Innovate
                        </a>
                        <p class="max-w-sm text-[1.125rem] leading-6">
                            Platform hukum sosial untuk membaca risiko, menemukan bantuan, dan bergerak cepat dalam tiga klik.
                        </p>
                    </div>

                    <nav aria-label="Primary" class="grid grid-cols-4 gap-2 lg:flex lg:flex-col">
                        <a href="{{ route('home') }}" class="nav-link" data-active="{{ request()->routeIs('home') ? 'true' : 'false' }}">Home</a>
                        <a href="{{ route('about') }}" class="nav-link" data-active="{{ request()->routeIs('about') ? 'true' : 'false' }}">About</a>
                        <a href="{{ route('konten') }}" class="nav-link" data-active="{{ request()->routeIs('konten') ? 'true' : 'false' }}">Konten</a>
                        <a href="{{ route('contact') }}" class="nav-link" data-active="{{ request()->routeIs('contact') ? 'true' : 'false' }}">Contact</a>
                    </nav>

                    <div class="flat-panel p-5">
                        <p class="section-kicker">Access Rule</p>
                        <p class="mt-4 text-[1.125rem] leading-6">
                            Semua fitur inti berada pada alur:
                            <span class="font-bold">buka menu</span>,
                            <span class="font-bold">pilih layanan</span>,
                            <span class="font-bold">ambil tindakan</span>.
                        </p>
                    </div>
                </div>
            </aside>

            <div class="flex min-h-screen min-w-0 flex-col">
                <header class="border-b-2 border-[var(--color-line)] px-6 py-5 md:px-10 lg:px-12">
                    <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
                        <div class="min-w-0">
                            <p class="section-kicker">@yield('eyebrow', 'Legal-Tech')</p>
                            <p class="mt-2 max-w-3xl text-[1.125rem] leading-6 text-[var(--color-ink)]/80">
                                INNOVATE: Impel Novelty, Navigate, Optimize, Validate, Advance Technological Endeavors.
                            </p>
                        </div>
                        <div class="grid gap-3 xl:w-[28rem]">
                            <div class="grid gap-3 md:grid-cols-[minmax(0,1fr)_auto]">
                                <label class="sr-only" for="feature-jump">Fitur Cepat</label>
                                <select
                                    id="feature-jump"
                                    class="quick-select"
                                    onchange="if (this.value) window.location.href = this.value"
                                >
                                    <option value="">Fitur Cepat</option>
                                    <option value="{{ route('konten') }}#scanner">Scanner Dokumen</option>
                                    <option value="{{ route('konten') }}#map">Map Bantuan</option>
                                    <option value="{{ route('konten') }}#education">Hak Saya</option>
                                    <option value="{{ route('konten') }}#feed">Justice Feed</option>
                                    <option value="{{ route('contact') }}">Hubungi Bantuan</option>
                                </select>
                                <a href="{{ route('contact') }}" class="cta-link text-center">Bantuan</a>
                            </div>
                            <p class="font-[var(--font-display)] text-lg font-bold uppercase tracking-[0.08em]">Social Subtheme</p>
                        </div>
                    </div>
                </header>

                <main class="flex-1 min-w-0 px-6 py-8 md:px-10 md:py-10 lg:px-12 lg:py-12">
                    @yield('content')
                </main>

                <footer class="border-t-2 border-[var(--color-line)] px-6 py-6 md:px-10 lg:px-12">
                    <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
                        <p class="text-[1.125rem] leading-6">Lex Innovate dibangun sebagai konsep legal-tech kompetisi yang memprioritaskan akses, validasi, dan tindakan.</p>
                        <p class="font-[var(--font-display)] text-lg font-bold uppercase tracking-[0.08em]">Laravel + Tailwind CSS</p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
