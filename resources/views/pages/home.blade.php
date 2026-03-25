@extends('layouts.legaltech')

@section('title', 'Home | Lex Innovate')
@section('eyebrow', 'Landasan INNOVATE')

@section('content')
    <section class="grid gap-6 xl:grid-cols-[minmax(0,1.6fr)_minmax(18rem,0.8fr)]">
        <div class="flat-panel p-6 md:p-8 lg:p-10">
            <p class="section-kicker">Democratizing Legal Access</p>
            <h1 class="mt-5 max-w-5xl text-6xl uppercase md:text-7xl lg:text-[7rem]">
                Hukum yang bisa dibaca,
                dipahami,
                dan ditindaklanjuti cepat.
            </h1>
            <p class="mt-8 max-w-4xl">
                Lex Innovate menghadirkan pengalaman legal-tech yang memecah dokumen rumit menjadi ringkasan yang jelas,
                menandai risiko secara tegas, dan menghubungkan warga ke bantuan hukum sosial dalam alur yang singkat.
            </p>
            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="{{ route('konten') }}" class="cta-link">Masuk ke Konten Inti</a>
                <a href="{{ route('contact') }}" class="cta-link alert">Ajukan Kasus Awal</a>
            </div>
        </div>

        <div class="grid gap-6">
            <article class="flat-panel p-6">
                <p class="section-kicker">Mission</p>
                <p class="mt-4">
                    Memindahkan akses hukum dari bahasa elit menjadi keputusan yang dapat dipahami oleh warga, pelajar, pekerja, dan komunitas rentan.
                </p>
            </article>
            <article class="alert-panel p-6">
                <p class="section-kicker">Risk Visibility</p>
                <p class="mt-4">
                    Setiap potensi pasal berbahaya, tenggat, dan konsekuensi hukum tampil sebagai blok risiko kontras tinggi.
                </p>
            </article>
        </div>
    </section>

    <section class="mt-6 grid gap-6 md:grid-cols-3">
        <article class="flat-panel p-6">
            <p class="display-number">01</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Navigate</p>
            <p class="mt-4">Navigasi vertikal memotong kebingungan dan membawa pengguna langsung ke halaman inti tanpa jalur panjang.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="display-number">02</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Validate</p>
            <p class="mt-4">Ringkasan sederhana, blok risiko, dan peta bantuan membuat pengguna tahu apa yang valid dan apa yang mendesak.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="display-number">03</p>
            <p class="mt-6 font-[var(--font-display)] text-3xl uppercase">Advance</p>
            <p class="mt-4">Form kontak yang ringkas mengubah pencarian informasi menjadi langkah bantuan nyata secara cepat dan terstruktur.</p>
        </article>
    </section>

    <section class="mt-6 grid gap-6 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)]">
        <article class="flat-panel p-6 md:p-8">
            <p class="section-kicker">Within 3 Clicks</p>
            <h2 class="mt-5 text-5xl uppercase md:text-6xl">Arsitektur untuk pengguna yang sedang butuh keputusan, bukan dekorasi.</h2>
            <ol class="mt-8 grid gap-4">
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 1: pilih halaman inti dari navigasi tipografi vertikal.</li>
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 2: buka modul scanner, peta bantuan, edukasi hak, atau forum komunitas.</li>
                <li class="border-t-2 border-[var(--color-line)] pt-4">Klik 3: hubungi bantuan, baca ringkasan, atau navigasi ke pos hukum terdekat.</li>
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
                    <dd class="mt-2">Demokratisasi akses legal berbasis AI summary, bantuan sosial, dan edukasi hak.</dd>
                </div>
            </dl>
        </article>
    </section>
@endsection
