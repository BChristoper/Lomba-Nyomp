@extends('layouts.legaltech')

@section('title', 'Konten | Lex Innovate')
@section('eyebrow', 'The Core App')

@section('content')
    <section class="flat-panel p-6 md:p-8 lg:p-10">
        <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
            <div>
                <p class="section-kicker">Core App</p>
                <h1 class="mt-5 max-w-5xl text-4xl uppercase sm:text-5xl md:text-7xl lg:text-[7rem]">Semua fitur penting dalam satu jalur.</h1>
            </div>
            <div class="grid gap-3 xl:w-[26rem]">
                <label class="sr-only" for="konten-jump">Pilih fitur</label>
                <select id="konten-jump" class="quick-select" onchange="if (this.value) window.location.href = this.value">
                    <option value="">Pilih Fitur</option>
                    <option value="#scanner">Scanner Dokumen</option>
                    <option value="#map">Map Bantuan</option>
                    <option value="#education">Hak Saya</option>
                    <option value="#feed">Justice Feed</option>
                </select>
            </div>
        </div>
    </section>

    <section id="scanner" class="mt-6 grid gap-6 xl:grid-cols-[minmax(0,1fr)_minmax(0,1fr)]">
        <article class="flat-panel p-6 md:p-8">
            <p class="section-kicker">AI Document Scanner UI</p>
            <h2 class="mt-5 text-5xl uppercase">Unggah dokumen, baca versi manusia.</h2>
            <label for="legal-document" class="mt-8 block border-2 border-dashed border-[var(--color-line)] bg-[var(--color-paper)] p-8">
                <span class="font-[var(--font-display)] text-3xl uppercase">Tarik dokumen ke area ini</span>
                <span class="mt-4 block max-w-2xl">Unggah kontrak, aduan, atau surat panggilan untuk dibaca lebih cepat.</span>
            </label>
            <input id="legal-document" type="file" class="sr-only" aria-label="Unggah dokumen hukum">
            <div class="mt-6 flex flex-col gap-4 sm:flex-row">
                <a href="#summary" class="cta-link">Ringkas Sekarang</a>
                <a href="{{ route('contact') }}" class="cta-link alert">Konsultasi Lanjutan</a>
            </div>
        </article>

        <article id="summary" class="flat-panel p-6 md:p-8">
            <p class="section-kicker">Simplified Summary</p>
            <div class="mt-6 grid gap-5">
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Makna Dokumen</h3>
                    <p class="mt-3">Ada kewajiban respon dalam 3 hari kerja.</p>
                </div>
                <div class="alert-panel p-5">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Risiko: tenggat sangat pendek</h3>
                    <p class="mt-3">Terlambat merespons dapat menghilangkan kesempatan bantahan awal.</p>
                </div>
                <div class="alert-panel p-5">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Risiko: klausul denda sepihak</h3>
                    <p class="mt-3">Ada klausul biaya yang berat sebelah.</p>
                </div>
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Tindakan Disarankan</h3>
                    <p class="mt-3">Simpan salinan, catat tenggat, lalu hubungi bantuan hukum.</p>
                </div>
            </div>
        </article>
    </section>

    <section id="map" class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
            <div>
                <p class="section-kicker">Legal Aid Map</p>
                <h2 class="mt-5 max-w-4xl text-5xl uppercase md:text-6xl">Peta bantuan hukum lebar penuh dengan keputusan cepat.</h2>
            </div>
            <p class="max-w-2xl">Cari lokasi bantuan dan ambil tindakan cepat.</p>
        </div>

        <div class="mt-8 grid gap-6 xl:grid-cols-[minmax(0,1.45fr)_minmax(18rem,0.55fr)]">
            <div class="border-2 border-[var(--color-line)] bg-[var(--color-paper)] p-4 md:p-5">
                <div class="border-2 border-[var(--color-line)] bg-[var(--color-surface)] p-4">
                    <p class="font-[var(--font-display)] text-2xl uppercase">Cari: pos bantuan hukum terdekat</p>
                </div>
                <div class="mt-4 grid gap-4 md:grid-cols-3">
                    <div class="border-2 border-[var(--color-line)] p-5">
                        <p class="font-[var(--font-display)] text-2xl uppercase">Jakarta Pusat</p>
                        <p class="mt-3">Pos Bantuan 02</p>
                    </div>
                    <div class="border-2 border-[var(--color-line)] p-5">
                        <p class="font-[var(--font-display)] text-2xl uppercase">Jakarta Timur</p>
                        <p class="mt-3">LBH Komunitas 07</p>
                    </div>
                    <div class="border-2 border-[var(--color-line)] p-5">
                        <p class="font-[var(--font-display)] text-2xl uppercase">Jakarta Selatan</p>
                        <p class="mt-3">Klinik Advokasi 04</p>
                    </div>
                    <div class="border-2 border-[var(--color-line)] p-5 md:col-span-2">
                        <p class="font-[var(--font-display)] text-2xl uppercase">Koridor Navigasi</p>
                        <p class="mt-3">12 menit ke pos bantuan dengan antrean tersingkat.</p>
                    </div>
                    <div class="alert-panel p-5">
                        <p class="font-[var(--font-display)] text-2xl uppercase">Status Risiko</p>
                        <p class="mt-3">Kasus memerlukan respons hari ini.</p>
                    </div>
                </div>
            </div>

            <aside class="grid gap-4">
                <div class="flat-panel p-6">
                    <p class="section-kicker">Nearest Hub</p>
                    <p class="mt-4 font-[var(--font-display)] text-4xl uppercase">LBH Komunitas 07</p>
                    <p class="mt-4">Buka sampai 20.00 untuk sengketa kerja, digital, dan keluarga.</p>
                </div>
                <a href="{{ route('contact') }}" class="cta-link text-center text-2xl">Hubungi</a>
                <a href="#map" class="cta-link alert text-center text-2xl">Navigasi</a>
            </aside>
        </div>
    </section>

    <section id="education" class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">Education Cards</p>
        <h2 class="mt-5 text-4xl uppercase sm:text-5xl md:text-6xl">Hak Saya: panduan singkat yang langsung bisa dipakai.</h2>
        <div class="mt-8 grid gap-5 lg:grid-cols-2 2xl:grid-cols-3">
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">4 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak pekerja saat kontrak berubah sepihak</h3>
                <p class="mt-4">Poin dasar, bukti, dan kapan minta pendampingan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">5 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak korban penyalahgunaan data pribadi</h3>
                <p class="mt-4">Simpan bukti, lapor, dan pahami jalur pemulihan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">3 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak penyewa pada konflik tempat tinggal</h3>
                <p class="mt-4">Soal pengusiran, deposit, dan negosiasi tertulis.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">6 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak siswa terhadap perundungan digital</h3>
                <p class="mt-4">Jalur pelaporan dan perlindungan identitas siswa.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">4 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak keluarga menghadapi pinjaman predator</h3>
                <p class="mt-4">Batas penagihan dan tanda tindakan yang melanggar.</p>
            </article>
            <article class="alert-panel p-5">
                <p class="section-kicker">2 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Prioritas darurat sebelum bantuan tiba</h3>
                <p class="mt-4">Checklist bukti dan langkah awal sebelum bantuan tiba.</p>
            </article>
        </div>
    </section>

    <section id="feed" class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">Viral Justice Feed</p>
        <h2 class="mt-5 text-4xl uppercase sm:text-5xl md:text-6xl">Forum singkat untuk dukungan komunitas.</h2>
        <div class="mt-8 grid gap-4">
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Utang digital dan tekanan penagihan di grup keluarga</p>
                <p class="mt-3">Diskusi bukti yang perlu disimpan sebelum melapor.</p>
            </article>
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Kontrak kerja harian tanpa salinan tertulis</p>
                <p class="mt-3">Fokus pada bukti transfer, chat, dan saksi.</p>
            </article>
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Ancaman penyebaran data pribadi setelah sengketa</p>
                <p class="mt-3">Respon komunitas diarahkan ke bantuan formal.</p>
            </article>
        </div>
    </section>
@endsection
