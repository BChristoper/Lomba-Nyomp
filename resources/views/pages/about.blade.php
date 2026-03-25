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
            Halaman ini menempatkan tim sebagai perancang sistem sosial, bukan sekadar pembuat antarmuka.
            Fokus kami adalah kejelasan, keberanian visual, dan alur yang bisa diakses oleh pengguna dengan tekanan tinggi.
        </p>
    </section>

    <section class="mt-6 grid gap-6 lg:grid-cols-3">
        <article class="flat-panel p-6">
            <p class="section-kicker">Lead Product</p>
            <h2 class="mt-5 text-4xl uppercase">Alya Rahman</h2>
            <p class="mt-5">Mengarahkan strategi legal-tech, memastikan seluruh fitur tetap relevan untuk masalah sosial sehari-hari.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="section-kicker">UX & Research</p>
            <h2 class="mt-5 text-4xl uppercase">Rafi Pratama</h2>
            <p class="mt-5">Menerjemahkan WCAG 2.1 AAA, arsitektur 3 klik, dan pendekatan bahasa sederhana ke dalam pengalaman yang disiplin.</p>
        </article>
        <article class="flat-panel p-6">
            <p class="section-kicker">Engineering</p>
            <h2 class="mt-5 text-4xl uppercase">Nadia Kusuma</h2>
            <p class="mt-5">Membangun fondasi Laravel dan Tailwind agar konsep kompetisi mudah dipresentasikan, diuji, dan dikembangkan.</p>
        </article>
    </section>

    <section class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">INNOVATE Philosophy</p>
        <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Impel Novelty</h3>
                <p class="mt-4">Mendorong pengalaman hukum yang tidak terasa birokratis, tetapi tetap formal dan dapat dipercaya.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Navigate</h3>
                <p class="mt-4">Menyediakan orientasi cepat melalui navigasi vertikal besar dan struktur halaman yang mudah dipindai.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Optimize</h3>
                <p class="mt-4">Mengurangi beban kognitif dengan blok informasi tegas, teks sederhana, dan formulir singkat.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Validate</h3>
                <p class="mt-4">Menandai risiko dan tindak lanjut dengan bahasa tegas agar pengguna tahu apa yang harus diprioritaskan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <h3 class="text-3xl uppercase">Advance</h3>
                <p class="mt-4">Mengubah pengetahuan hukum menjadi aksi: kontak bantuan, navigasi lokasi, dan edukasi hak.</p>
            </article>
            <article class="alert-panel p-5">
                <h3 class="text-3xl uppercase">Social Impact</h3>
                <p class="mt-4">Setiap modul diarahkan untuk memperluas akses keadilan, khususnya bagi pengguna yang minim sumber daya dan waktu.</p>
            </article>
        </div>
    </section>
@endsection
