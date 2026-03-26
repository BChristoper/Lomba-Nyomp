@php
    $langRoute = ['lang' => 'id'];
    $routeLang = fn (string $name, array $params = []) => route($name, array_merge($langRoute, $params));
@endphp
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BELA | Legal-Tech Indonesia</title>
        <meta
            name="description"
            content="BELA membantu masyarakat memahami hukum melalui UI interaktif: scan dokumen, edukasi hak, diskusi, dan dukungan komunitas."
        >
        @vite('resources/css/app.css')
    </head>
    <body class="bela-live-body">
        <div class="bela-live-page">
            <div class="bela-live-bg" aria-hidden="true">
                <span class="bela-live-blob blob-a"></span>
                <span class="bela-live-blob blob-b"></span>
                <span class="bela-live-blob blob-c"></span>
            </div>

            <header class="bela-live-header">
                <nav class="bela-live-container bela-live-nav" aria-label="Navigasi utama">
                    <a href="{{ $routeLang('home') }}" class="bela-live-brand">BELA</a>
                    <div class="bela-live-links">
                        <a href="{{ $routeLang('home') }}">Beranda</a>
                        <a href="{{ $routeLang('action-guide') }}">Tahukum</a>
                        <a href="{{ $routeLang('ai-chat') }}">LegalAi</a>
                        <a href="{{ $routeLang('justice-viral') }}">Justice Viral</a>
                        <a href="{{ $routeLang('halokum') }}">Halokum</a>
                    </div>
                    <a href="{{ $routeLang('auth.landing') }}" class="bela-live-btn bela-live-btn-outline">Masuk</a>
                </nav>
            </header>

            <main class="bela-live-main bela-live-container">
                <section class="bela-live-hero" id="hero">
                    <div class="bela-live-hero-copy">
                        <p class="bela-live-kicker">Platform Legal-Tech Interaktif</p>
                        <h1>Dari Tidak Tahu Jadi Paham Hukum. Semua Orang Berhak Dibela.</h1>
                        <p>BELA membantu kamu memahami hukum dengan mudah—dari dokumen, hak, hingga langkah yang bisa kamu ambil dengan percaya diri.</p>
                        <div class="bela-live-actions">
                            <a href="{{ $routeLang('document-scan') }}" class="bela-live-btn bela-live-btn-primary">Coba Scan Dokumen</a>
                            <a href="{{ $routeLang('action-guide') }}" class="bela-live-btn bela-live-btn-soft">Pelajari Hukum</a>
                        </div>
                    </div>

                    <div class="bela-live-hero-visual" aria-label="Ilustrasi pengguna membaca dokumen hukum">
                        <img src="{{ asset('assets/images/hero-bela.png') }}" alt="Ilustrasi wanita membaca dokumen hukum" class="bela-live-hero-photo">
                        <div class="bela-live-trust bela-live-trust-floating">
                            <article class="trust-a"><strong>10.000+</strong><span>dokumen dianalisis</span></article>
                            <article class="trust-b"><strong>5.000+</strong><span>pengguna terbantu</span></article>
                            <article class="trust-c"><strong>24/7</strong><span>akses edukasi hukum</span></article>
                        </div>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-plain" id="masalah">
                    <div class="bela-live-section-head center bela-live-problem-head">
                        <p class="bela-live-kicker">Tahukah Kamu</p>
                        <h2><strong>7 dari 10</strong> orang indonesia masih buta terhadap hukum</h2>
                        <p class="bela-live-problem-copy">Banyak masyarakat belum memahami hak dan kewajiban mereka, sehingga sering bingung atau dirugikan saat menghadapi masalah hukum.</p>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-soft" id="cara-kerja">
                    <div class="bela-live-help-layout">
                        <div class="bela-live-help-visual">
                            <img src="{{ asset('assets/images/cara-kerja.png') }}" alt="Ilustrasi BELA membantu pengguna memahami masalah hukum" class="bela-live-help-photo">
                        </div>
                        <div class="bela-live-help-copy">
                            <p class="bela-live-kicker">Cara Kerja</p>
                            <h2>Bagaimana BELA bisa membantu masalah tersebut?</h2>
                            <p class="bela-live-help-intro">BELA membantu dari tahap memahami masalah sampai menyiapkan langkah awal yang lebih aman untuk pengguna umum.</p>
                            <ul class="bela-live-help-points">
                                <li><strong>Analisis dokumen otomatis</strong> supaya isi penting dan potensi risiko lebih cepat terbaca.</li>
                                <li><strong>Edukasi hak dan kewajiban</strong> dengan bahasa sederhana agar tidak salah langkah.</li>
                                <li><strong>Arah tindakan praktis</strong> berbentuk checklist yang bisa langsung diikuti.</li>
                                <li><strong>Dukungan komunitas</strong> untuk diskusi awal sebelum lanjut ke bantuan profesional.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-plain" id="fitur">
                    <div class="bela-live-section-head">
                        <p class="bela-live-kicker">Fitur Utama</p>
                        <h2>Visual dulu, paham lebih cepat.</h2>
                    </div>
                    <div class="bela-live-feature-grid">
                        <article class="bela-live-feature-card">
                            <div class="feature-icon">🔍</div>
                            <h3>Scan Legal Document</h3>
                            <p>Ringkasan otomatis dokumen.</p>
                            <div class="mini-ui mini-ui-photo scan">
                                <img src="{{ asset('assets/images/scan-legal-document.png') }}" alt="Ilustrasi scan dokumen legal" class="bela-live-feature-photo">
                            </div>
                        </article>
                        <article class="bela-live-feature-card">
                            <div class="feature-icon">📚</div>
                            <h3>Tau Hukum</h3>
                            <p>Hakmu dijelaskan tanpa ribet.</p>
                            <div class="mini-ui mini-ui-photo law">
                                <img src="{{ asset('assets/images/tau-hukum.png') }}" alt="Ilustrasi belajar hukum dengan laptop" class="bela-live-feature-photo bela-live-feature-photo-law">
                            </div>
                        </article>
                        <article class="bela-live-feature-card">
                            <div class="feature-icon">📢</div>
                            <h3>Justice Viral</h3>
                            <p>Suarakan kasus dan dukung</p>
                            <div class="mini-ui mini-ui-photo feed">
                                <img src="{{ asset('assets/images/justice-viral.png') }}" alt="Ilustrasi kampanye justice viral dengan megafon" class="bela-live-feature-photo">
                            </div>
                        </article>
                        <article class="bela-live-feature-card">
                            <div class="feature-icon">💬</div>
                            <h3>HaloHukum</h3>
                            <p>Diskusi cepat dengan komunitas.</p>
                            <div class="mini-ui mini-ui-photo chat">
                                <img src="{{ asset('assets/images/halohukum.png') }}" alt="Ilustrasi diskusi hukum bersama komunitas" class="bela-live-feature-photo">
                            </div>
                        </article>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-plain" id="showcase">
                    <div class="bela-live-section-head">
                        <p class="bela-live-kicker">Feature Showcase</p>
                        <h2>Mockup produk yang terasa nyata.</h2>
                    </div>
                    <div class="bela-live-showcase">
                        <article class="row">
                            <div class="mock large doc">
                                <img src="{{ asset('assets/images/scan-result-ilustrasi.png') }}" alt="Contoh hasil scan dokumen langsung terbaca" class="bela-live-showcase-img">
                            </div>
                            <div class="copy"><h3>Hasil scan langsung terbaca</h3><p>Highlight risiko, pasal penting, dan rekomendasi langkah muncul dalam satu layar.</p></div>
                        </article>
                        <article class="row reverse">
                            <div class="mock large edu">
                                <img src="{{ asset('assets/images/belajar-hukum-situasi.png') }}" alt="Contoh modul belajar hukum berbasis situasi" class="bela-live-showcase-img">
                            </div>
                            <div class="copy"><h3>Belajar hukum berbasis situasi</h3><p>Konten modular: pilih kasus, lihat hakmu, simpan checklist tindakan.</p></div>
                        </article>
                        <article class="row">
                            <div class="mock large forum">
                                <img src="{{ asset('assets/images/forum-diskusi-terarah.png') }}" alt="Contoh forum diskusi komunitas yang terarah" class="bela-live-showcase-img">
                            </div>
                            <div class="copy"><h3>Forum diskusi yang terarah</h3><p>Pertanyaan, balasan, dan insight komunitas dirangkum supaya keputusan lebih cepat.</p></div>
                        </article>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-plain" id="viral">
                    <div class="bela-live-viral-layout">
                        <div class="bela-live-viral-marquee" aria-label="Galeri isu hukum yang sedang ramai dibahas">
                            <div class="bela-live-viral-marquee-grid">
                                <div class="bela-live-viral-marquee-col">
                                    <div class="bela-live-viral-track down">
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita1.jpg') }}" alt="Berita viral 1"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita2.jpg') }}" alt="Berita viral 2"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita3.jpg') }}" alt="Berita viral 3"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita4.jpeg') }}" alt="Berita viral 4"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita1.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita2.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita3.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita4.jpeg') }}" alt="" aria-hidden="true"></figure>
                                    </div>
                                </div>
                                <div class="bela-live-viral-marquee-col">
                                    <div class="bela-live-viral-track up">
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita5.jpg') }}" alt="Berita viral 5"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita6.jpg') }}" alt="Berita viral 6"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita7.jpg') }}" alt="Berita viral 7"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita8.jpg') }}" alt="Berita viral 8"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita5.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita6.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita7.jpg') }}" alt="" aria-hidden="true"></figure>
                                        <figure class="bela-live-viral-media"><img src="{{ asset('assets/images/berita8.jpg') }}" alt="" aria-hidden="true"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bela-live-viral-copy">
                            <p class="bela-live-kicker">Justice Viral</p>
                            <h2>Buat isu penting lebih terlihat.</h2>
                            <p>Kasus yang relevan bisa naik bersama dukungan publik agar lebih cepat ditindaklanjuti.</p>
                            <a href="{{ $routeLang('justice-viral') }}" class="bela-live-btn bela-live-btn-primary">Lihat Topik Viral</a>
                        </div>
                    </div>
                </section>

                <section class="bela-live-section bela-live-section-soft" id="halohukum">
                    <div class="bela-live-chat-layout">
                        <div class="bela-live-chat-copy">
                            <p class="bela-live-kicker">HaloHukum</p>
                            <h2>Tanya, diskusi, dan dapatkan arahan awal.</h2>
                            <p>UI chat dirancang seperti percakapan sehari-hari agar nyaman untuk pengguna umum.</p>
                            <a href="{{ $routeLang('contact') }}" class="bela-live-btn bela-live-btn-soft">Masuk HaloHukum</a>
                        </div>
                        <div class="bela-live-chat-ui" aria-label="Mockup chat">
                            <div class="msg from">Saya baru dapat surat somasi, harus mulai dari mana?</div>
                            <div class="msg to">Tenang. Kita mulai dari cek isi pasal dan tenggat waktunya dulu.</div>
                            <div class="msg from">Kalau saya belum paham isi suratnya?</div>
                            <div class="msg to">Upload dokumennya ke Scan Legal Document, lalu kita bahas hasilnya.</div>
                            <div class="typing"><span></span><span></span><span></span></div>
                        </div>
                    </div>
                </section>

                <section class="bela-live-cta" id="cta">
                    <div class="icon">⚖</div>
                    <h2>Jangan hadapi masalah hukum sendirian.</h2>
                    <p>Mulai sekarang dan rasakan pengalaman hukum yang lebih jelas, ramah, dan bisa ditindaklanjuti.</p>
                    <a href="{{ $routeLang('auth.landing') }}" class="bela-live-btn bela-live-btn-primary glow">Mulai Sekarang</a>
                </section>
            </main>

            <footer class="bela-live-footer">
                <div class="bela-live-container bela-live-footer-inner">
                    <p>© {{ now()->year }} BELA</p>
                    <div class="bela-live-footer-links">
                        <a href="#hero">Tentang</a>
                        <a href="{{ $routeLang('contact') }}">Kontak</a>
                        <a href="#">Privasi</a>
                    </div>
                    <p class="disc">BELA bersifat edukatif dan bukan pengganti nasihat hukum profesional.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
