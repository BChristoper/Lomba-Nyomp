@extends('layouts.legaltech')
@php
    $lang = request('lang') === 'en' ? 'en' : 'id';
    $t = fn (string $id, string $en) => $lang === 'en' ? $en : $id;
@endphp

@section('title')
    {{ $t('Halokum | Ruang Keadilan', 'Halokum | Justice Room') }}
@endsection

@section('content')
    <section class="halokum-shell mx-auto max-w-6xl">
        <div class="halokum-layout">
            <div class="halokum-main">
                <article class="halokum-card">
                    <div class="halokum-card-head">
                        <h1>Konsultasi dengan Pakar</h1>
                        <a href="#" class="halokum-link">Lihat Semua</a>
                    </div>
                    <div class="halokum-chip-row">
                        <span class="halokum-chip active">Semua</span>
                        <span class="halokum-chip">Pidana</span>
                        <span class="halokum-chip">Keluarga</span>
                        <span class="halokum-chip">Ketenagakerjaan</span>
                        <span class="halokum-chip">Properti</span>
                    </div>

                    <div class="halokum-expert-list">
                        <article class="halokum-expert-item">
                            <div class="halokum-avatar">AS</div>
                            <div class="halokum-expert-copy">
                                <h3>Dr. Ahmad Santoso, SH., M.H</h3>
                                <p>Pakar Pidana &amp; HAKI</p>
                            </div>
                            <div class="halokum-expert-actions">
                                <span class="halokum-status online">Online</span>
                                <button type="button" class="halokum-mini-btn">Mulai Chat</button>
                            </div>
                        </article>

                        <article class="halokum-expert-item">
                            <div class="halokum-avatar">MW</div>
                            <div class="halokum-expert-copy">
                                <h3>Maria Wijaya, SH., LL.M</h3>
                                <p>Pakar Perdata &amp; Perizinan</p>
                            </div>
                            <div class="halokum-expert-actions">
                                <span class="halokum-status online">Online</span>
                                <button type="button" class="halokum-mini-btn">Mulai Chat</button>
                            </div>
                        </article>

                        <article class="halokum-expert-item">
                            <div class="halokum-avatar">RP</div>
                            <div class="halokum-expert-copy">
                                <h3>Budi Prakoso, SH</h3>
                                <p>Pakar Perdata &amp; Hukum Bisnis</p>
                            </div>
                            <div class="halokum-expert-actions">
                                <span class="halokum-status busy">Sibuk</span>
                                <button type="button" class="halokum-mini-btn ghost">Tidak Tersedia</button>
                            </div>
                        </article>
                    </div>
                </article>

                <article class="halokum-card">
                    <div class="halokum-card-head">
                        <h2>Forum Diskusi Komunitas</h2>
                        <button type="button" class="halokum-mini-btn">Buat Pertanyaan</button>
                    </div>

                    <input class="halokum-search" type="text" placeholder="Cari diskusi atau topik..." aria-label="Cari diskusi">

                    <div class="halokum-tab-row">
                        <span class="halokum-tab active">Semua</span>
                        <span class="halokum-tab">Terjawab</span>
                        <span class="halokum-tab">Belum</span>
                        <span class="halokum-tab">Trending</span>
                    </div>

                    <div class="halokum-topic-list">
                        <article class="halokum-topic-item">
                            <h3>Bagaimana cara melaporkan KDRT ke polisi?</h3>
                            <p>Oleh Anonim • 2 jam lalu • 12 jawaban</p>
                        </article>
                        <article class="halokum-topic-item">
                            <h3>Apakah bisa menuntut kompensasi setelah PHK sepihak?</h3>
                            <p>Oleh Rina N. • 5 jam lalu • 27 jawaban</p>
                        </article>
                        <article class="halokum-topic-item">
                            <h3>Surat tilang hilang, apa yang harus dilakukan?</h3>
                            <p>Oleh Bima P. • 1 hari lalu • 44 jawaban</p>
                        </article>
                        <article class="halokum-topic-item">
                            <h3>Hak waris anak dari pernikahan kedua bagaimana?</h3>
                            <p>Oleh Sari H. • 2 hari lalu • 18 jawaban</p>
                        </article>
                    </div>
                </article>
            </div>

            <aside class="halokum-side">
                <article class="halokum-card">
                    <h3 class="halokum-side-title">Punya Pertanyaan Cepat?</h3>
                    <input class="halokum-search" type="text" placeholder="Tulis pertanyaan Anda di sini..." aria-label="Pertanyaan cepat">
                    <button type="button" class="halokum-ask-btn">Kirim Pertanyaan</button>
                    <p class="halokum-note">Pertanyaan akan dibalas oleh komunitas atau pakar dalam 24 jam.</p>
                </article>

                <article class="halokum-card">
                    <h3 class="halokum-side-title">Topik Populer</h3>
                    <div class="halokum-chip-row">
                        <span class="halokum-chip">KDRT</span>
                        <span class="halokum-chip">PHK</span>
                        <span class="halokum-chip">Tilang</span>
                        <span class="halokum-chip">Waris</span>
                        <span class="halokum-chip">Penipuan</span>
                        <span class="halokum-chip">Pidana</span>
                    </div>
                </article>

                <article class="halokum-card">
                    <h3 class="halokum-side-title">Statistik Komunitas</h3>
                    <ul class="halokum-stats">
                        <li><span>Total Diskusi</span><strong>3,247</strong></li>
                        <li><span>Pertanyaan Terjawab</span><strong>2,891</strong></li>
                        <li><span>Pakar Aktif</span><strong>24</strong></li>
                        <li><span>Anggota Komunitas</span><strong>12,456</strong></li>
                    </ul>
                </article>

                <article class="halokum-card">
                    <h3 class="halokum-side-title">Panduan Komunitas</h3>
                    <ul class="halokum-guide">
                        <li>Hormati privasi dan anonimitas pengguna lain.</li>
                        <li>Jangan membagikan nomor atau data sensitif di ruang publik.</li>
                        <li>Gunakan bahasa yang sopan dan berfokus pada solusi.</li>
                    </ul>
                </article>
            </aside>
        </div>
    </section>
@endsection
