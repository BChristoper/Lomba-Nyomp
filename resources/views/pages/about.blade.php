@extends('layouts.legaltech')

@section('title', 'About | Lex Innovate')
@section('eyebrow', 'Team & Vision')

@section('content')
    <section class="flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">Vision</p>
        <h1 class="mt-5 max-w-5xl text-6xl uppercase md:text-7xl lg:text-[7rem]">
            Tim kecil,
            misi besar:
            mengubah teks hukum menjadi layanan publik yang bisa dipakai.
        </h1>
        <p class="mt-8 max-w-4xl">
            Tim ini fokus pada akses hukum yang jelas, cepat, dan mudah dipakai.
        </p>
    </section>

    <section class="mt-6 grid gap-6 lg:grid-cols-3">
        <article class="flat-panel p-6">
            <p class="section-kicker">Lead Product</p>
            <h2 class="mt-5 text-4xl uppercase">Alya Rahman</h2>
            <p class="mt-5">Menjaga fitur tetap relevan dengan masalah sosial sehari-hari.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="section-kicker">UX & Research</p>
            <h2 class="mt-5 text-4xl uppercase">Rafi Pratama</h2>
            <p class="mt-5">Merapikan alur, aksesibilitas, dan bahasa antarmuka.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="section-kicker">Engineering</p>
            <h2 class="mt-5 text-4xl uppercase">Nadia Kusuma</h2>
            <p class="mt-5">Membangun fondasi Laravel dan Tailwind untuk prototype kompetisi.</p>
        </article>
    </section>

    <section class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">INNOVATE Philosophy</p>
        <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Impel Novelty</h3>
                <p class="mt-4">Membuat pengalaman hukum terasa baru dan tetap tepercaya.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Navigate</h3>
                <p class="mt-4">Membawa pengguna cepat ke fitur yang dibutuhkan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Optimize</h3>
                <p class="mt-4">Memotong teks berlebih dan fokus pada inti.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Validate</h3>
                <p class="mt-4">Menandai risiko dan langkah yang harus diprioritaskan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Advance</h3>
                <p class="mt-4">Mengubah informasi menjadi tindakan nyata.</p>
            </article>
            <article class="alert-panel p-5">
                <h3 class="text-3xl uppercase">Social Impact</h3>
                <p class="mt-4">Membuka akses keadilan bagi pengguna dengan waktu dan sumber daya terbatas.</p>
            </article>
        </div>
    </section>
@endsection
