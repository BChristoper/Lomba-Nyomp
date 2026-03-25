@extends('layouts.legaltech')

@section('title', 'Konten | Lex Innovate')
@section('eyebrow', 'The Core App')

@section('content')
    <section class="flat-panel p-6 md:p-8 lg:p-10">
        <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
            <div>
                <p class="section-kicker">Core App</p>
                <h1 class="mt-5 max-w-5xl text-6xl uppercase md:text-7xl lg:text-[7rem]">Scanner, bantuan hukum, edukasi, dan forum dukungan dalam satu jalur.</h1>
            </div>
            <nav aria-label="Konten cepat" class="grid gap-3 md:grid-cols-2 xl:w-[26rem]">
                <a href="#scanner" class="cta-link">Scanner</a>
                <a href="#map" class="cta-link">Map</a>
                <a href="#education" class="cta-link">Hak Saya</a>
                <a href="#feed" class="cta-link">Justice Feed</a>
            </nav>
        </div>
    </section>

    <section id="scanner" class="mt-6 grid gap-6 xl:grid-cols-[minmax(0,1fr)_minmax(0,1fr)]">
        <article class="flat-panel p-6 md:p-8">
            <p class="section-kicker">AI Document Scanner UI</p>
            <h2 class="mt-5 text-5xl uppercase">Unggah dokumen, baca versi manusia.</h2>
            <label for="legal-document" class="mt-8 block border-2 border-dashed border-[var(--color-line)] bg-[var(--color-paper)] p-8">
                <span class="font-[var(--font-display)] text-3xl uppercase">Tarik dokumen ke area ini</span>
                <span class="mt-4 block max-w-2xl">Mendukung surat perjanjian, aduan, kontrak kerja, dan surat panggilan. Sistem memecah bahasa hukum menjadi poin tindakan.</span>
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
                    <p class="mt-3">Dokumen ini memuat kewajiban respon dalam 3 hari kerja dan memberi ruang sengketa apabila pihak penerima tidak menindaklanjuti.</p>
                </div>
                <div class="alert-panel p-5">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Risiko: tenggat sangat pendek</h3>
                    <p class="mt-3">Jika tenggat terlewat, pengguna dapat kehilangan hak bantahan awal dan berpotensi masuk proses lanjutan tanpa pendampingan.</p>
                </div>
                <div class="alert-panel p-5">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Risiko: klausul denda sepihak</h3>
                    <p class="mt-3">Ada klausul yang memindahkan beban biaya ke pihak yang lebih lemah tanpa penjelasan mekanisme sengketa yang seimbang.</p>
                </div>
                <div class="border-t-2 border-[var(--color-line)] pt-4">
                    <h3 class="font-[var(--font-display)] text-3xl uppercase">Tindakan Disarankan</h3>
                    <p class="mt-3">Simpan salinan, tandai tanggal respons, dan hubungi pos bantuan hukum terdekat untuk validasi sebelum menandatangani atau menjawab.</p>
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
            <p class="max-w-2xl">Tampilan meniru ritme aplikasi peta: area pencarian, lokasi aktif, dan panel aksi langsung tanpa mengganggu keterbacaan.</p>
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
                        <p class="mt-3">Perjalanan 12 menit dari posisi pengguna menuju pos dengan antrean tersingkat.</p>
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
                    <p class="mt-4">Buka sampai 20.00, fokus pada sengketa kerja, kekerasan digital, dan mediasi keluarga.</p>
                </div>
                <a href="{{ route('contact') }}" class="cta-link text-center text-2xl">Hubungi</a>
                <a href="#map" class="cta-link alert text-center text-2xl">Navigasi</a>
            </aside>
        </div>
    </section>

    <section id="education" class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">Education Cards</p>
        <h2 class="mt-5 text-5xl uppercase md:text-6xl">Hak Saya: pengetahuan singkat untuk konteks sosial yang paling sering terjadi.</h2>
        <div class="mt-8 grid gap-5 lg:grid-cols-2 2xl:grid-cols-3">
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">4 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak pekerja saat kontrak berubah sepihak</h3>
                <p class="mt-4">Ringkasan tentang pemberitahuan, bukti tertulis, dan kapan harus meminta pendampingan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">5 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak korban penyalahgunaan data pribadi</h3>
                <p class="mt-4">Panduan dasar menyimpan bukti digital, melapor, dan memahami jalur pemulihan.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">3 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak penyewa pada konflik tempat tinggal</h3>
                <p class="mt-4">Posisi hukum atas pengusiran mendadak, pengembalian deposit, dan negosiasi tertulis.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">6 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak siswa terhadap perundungan digital</h3>
                <p class="mt-4">Membaca jalur pelaporan, perlindungan identitas, dan peran sekolah sebagai ruang aman.</p>
            </article>
            <article class="border-2 border-[var(--color-line)] p-5">
                <p class="section-kicker">4 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Hak keluarga menghadapi pinjaman predator</h3>
                <p class="mt-4">Batas informasi yang wajib diberikan, tekanan penagihan, dan kapan tindakan dianggap melanggar.</p>
            </article>
            <article class="alert-panel p-5">
                <p class="section-kicker">2 menit baca</p>
                <h3 class="mt-4 text-3xl uppercase">Prioritas darurat sebelum bantuan tiba</h3>
                <p class="mt-4">Checklist singkat untuk menyimpan bukti, menghentikan eskalasi, dan menyiapkan kronologi.</p>
            </article>
        </div>
    </section>

    <section id="feed" class="mt-6 flat-panel p-6 md:p-8 lg:p-10">
        <p class="section-kicker">Viral Justice Feed</p>
        <h2 class="mt-5 text-5xl uppercase md:text-6xl">Forum monokrom untuk dukungan komunitas yang fokus pada substansi.</h2>
        <div class="mt-8 grid gap-4">
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Utang digital dan tekanan penagihan di grup keluarga</p>
                <p class="mt-3">Pengguna mencari pola bukti yang perlu disimpan sebelum melapor. Komunitas menanggapi dengan daftar kronologi dan saran eskalasi.</p>
            </article>
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Kontrak kerja harian tanpa salinan tertulis</p>
                <p class="mt-3">Diskusi berfokus pada bagaimana mengumpulkan bukti transfer, chat, dan saksi untuk memulai konsultasi.</p>
            </article>
            <article class="border-t-2 border-[var(--color-line)] pt-5">
                <p class="font-[var(--font-display)] text-3xl uppercase">Ancaman penyebaran data pribadi setelah sengketa</p>
                <p class="mt-3">Feed menampilkan respons komunitas yang ringkas, tenang, dan mengarah ke bantuan formal tanpa sensasionalisme.</p>
            </article>
        </div>
    </section>
@endsection
