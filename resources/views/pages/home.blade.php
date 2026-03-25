@extends('layouts.legaltech')

@section('title', 'Home | Lex Innovate')
@section('eyebrow', 'Landasan INNOVATE')

@section('content')
    <section class="grid gap-6 xl:grid-cols-[minmax(0,1.6fr)_minmax(18rem,0.8fr)]">
        <div class="flat-panel min-w-0 p-6 md:p-8 lg:p-10">
            <p class="section-kicker">Democratizing Legal Access</p>
            <h1 class="mt-5 max-w-5xl text-4xl uppercase sm:text-5xl md:text-7xl lg:text-[7rem]">
                Hukum yang bisa dibaca,
                dipahami,
                dan ditindaklanjuti cepat.
            </h1>
            <p class="mt-8 max-w-4xl">
                Baca ringkasan hukum, lihat risiko, lalu temukan bantuan tanpa alur yang rumit.
            </p>
            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="{{ route('konten') }}" class="cta-link">Masuk ke Konten Inti</a>
                <a href="{{ route('contact') }}" class="cta-link alert">Ajukan Kasus Awal</a>
            </div>
        </div>

        <div class="grid min-w-0 gap-6">
            <article class="flat-panel p-6">
                <p class="section-kicker">Mission</p>
                <p class="mt-4">
                    Mengubah bahasa hukum jadi keputusan yang cepat dipahami.
                </p>
            </article>
            <article class="alert-panel p-6">
                <p class="section-kicker">Risk Visibility</p>
                <p class="mt-4">
                    Risiko tampil tegas agar pengguna tahu apa yang mendesak.
                </p>
            </article>
        </div>
    </section>

    <section class="mt-6 grid gap-6 md:grid-cols-3">
        <article class="flat-panel p-6">
            <p class="display-number">01</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Navigate</p>
            <p class="mt-4">Masuk ke fitur inti dalam beberapa klik.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="display-number">02</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Validate</p>
            <p class="mt-4">Ringkasan dan blok risiko memperjelas tindakan.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="display-number">03</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Advance</p>
            <p class="mt-4">Hubungi bantuan lewat form singkat.</p>
        </article>
    </section>

    <section class="mt-6 grid gap-6 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)]">
        <article class="flat-panel p-6 md:p-8">
            <p class="section-kicker">Within 3 Clicks</p>
            <h2 class="mt-5 text-4xl uppercase sm:text-5xl md:text-6xl">Arsitektur untuk pengguna yang sedang butuh keputusan, bukan dekorasi.</h2>
            <ol class="mt-8 grid gap-4">
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 1: pilih halaman atau dropdown fitur.</li>
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 2: buka scanner, map, edukasi, atau forum.</li>
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 3: baca hasil atau hubungi bantuan.</li>
            </ol>
        </article>

        <article class="flat-panel p-6 md:p-8">
            <p class="section-kicker">Competition Positioning</p>
            <dl class="mt-6 grid gap-5">
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <dt class="font-[var(--font-display)] text-2xl uppercase">Theme</dt>
                    <dd class="mt-2">INNOVATE</dd>
                </div>
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <dt class="font-[var(--font-display)] text-2xl uppercase">Subtheme</dt>
                    <dd class="mt-2">Social</dd>
                </div>
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <dt class="font-[var(--font-display)] text-2xl uppercase">Core Promise</dt>
                    <dd class="mt-2">Akses hukum yang lebih cepat dan lebih mudah dipakai.</dd>
                </div>
            </dl>
        </article>
    </section>
@endsection
