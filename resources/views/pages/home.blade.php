@extends('layouts.legaltech')
@php
    $lang = request('lang') === 'en' ? 'en' : 'id';
    $langRoute = ['lang' => $lang];
    $t = fn (string $id, string $en) => $lang === 'en' ? $en : $id;
    $routeLang = fn (string $name, array $params = []) => route($name, array_merge($langRoute, $params));
@endphp

@section('title')
    {{ $t('Beranda | Ruang Keadilan', 'Home | Justice Room') }}
@endsection

@section('content')
    @php
        $aiSuggestions = [
            ['preset' => 'penipuan-online', 'label' => $t('Saya ditipu online', 'I was scammed online')],
            ['preset' => 'kontrak-kerja', 'label' => $t('Saya ingin cek kontrak kerja', 'I want to review a work contract')],
            ['preset' => 'dipanggil-polisi', 'label' => $t('Saya dipanggil polisi', 'I was summoned by the police')],
            ['preset' => 'utang-ditagih', 'label' => $t('Saya diteror debt collector', 'Debt collectors are harassing me')],
        ];
    @endphp

    <section class="mx-auto hero-grid max-w-6xl">
        <div class="hero-card px-5 py-7 md:px-8 md:py-10">
            <h1 class="mt-4 max-w-4xl text-[2.25rem] leading-[1.02] text-[var(--color-primary)] md:mt-5 md:text-[4.6rem]">
                {{ $t(
                    'Mulai dari situasi yang kamu alami, bukan dari istilah hukum yang rumit.',
                    'Start from the situation you are facing, not from complicated legal terms.'
                ) }}
            </h1>
            <p class="mt-5 max-w-3xl text-[1.125rem] leading-8 text-[var(--color-muted-text)] md:text-[1.2rem]">
                {{ $t(
                    'Gunakan aplikasi ini saat kamu menghadapi masalah seperti ditipu saat belanja online, isi kontrak kerja yang mencurigakan, ancaman debt collector, pemanggilan polisi, atau saat butuh tahu hak dasar sebelum bicara dengan pihak lain.',
                    'Use this app when you face problems such as online shopping fraud, suspicious work contracts, debt collector threats, police summons, or when you need to know your basic rights before speaking to other parties.'
                ) }}
            </p>

            <form action="{{ route('ai-chat') }}" method="GET" class="mt-8">
                <input type="hidden" name="lang" value="{{ $lang }}">
                <label for="issue" class="eyebrow">{{ $t('Apa masalahmu hari ini?', 'What problem are you facing today?') }}</label>
                <div class="search-shell mt-3">
                    <input
                        id="issue"
                        name="q"
                        type="text"
                        class="search-input"
                        value="{{ request('q') }}"
                        placeholder="{{ $t('Contoh: saya ditipu online, kontrak kerja saya aneh, saya dipanggil polisi', 'Example: I was scammed online, my work contract looks strange, I was summoned by the police') }}"
                    >
                </div>
                <p class="mt-3 text-[1rem] text-[var(--color-muted-text)]">
                    {{ $t(
                        'Contoh: uang tidak dikembalikan, gaji ditahan, diminta tanda tangan cepat, atau menerima ancaman lewat chat.',
                        'Example: my money was not returned, my salary was withheld, I was rushed to sign, or I received threats over chat.'
                    ) }}
                </p>
            </form>

            <div class="mt-4">
                <p class="eyebrow">{{ $t('Pilih contoh masalah', 'Choose a sample problem') }}</p>
                <div class="suggestion-chip-wrap mt-3">
                    @foreach ($aiSuggestions as $suggestion)
                        <a href="{{ $routeLang('ai-chat', ['preset' => $suggestion['preset']]) }}" class="quick-chip">
                            {{ $suggestion['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="mt-4 flex flex-wrap gap-3">
                <a href="{{ $routeLang('ai-chat', ['preset' => 'penipuan-online']) }}" class="quick-chip">{{ $t('Lihat contoh jawaban AI', 'See a sample AI answer') }}</a>
                <a href="{{ $routeLang('document-scan') }}" class="quick-chip">{{ $t('Saya ingin cek kontrak', 'I want to review a contract') }}</a>
                <a href="{{ $routeLang('action-guide') }}" class="quick-chip">{{ $t('Saya perlu langkah cepat', 'I need quick steps') }}</a>
            </div>

            <div class="hero-actions mt-6">
                <a href="{{ $routeLang('ai-chat', ['preset' => 'penipuan-online']) }}" class="action-card ai">
                    <span class="action-icon">&#129302;</span>
                    <p class="mt-4 font-[var(--font-display)] text-[1.45rem] font-extrabold text-[var(--color-primary)]">{{ $t('Tanya AI', 'Ask AI') }}</p>
                    <p class="mt-2 max-w-[16rem] text-[1rem] leading-7 text-[var(--color-muted-text)]">
                        {{ $t(
                            'Cocok untuk kasus penipuan online, utang, sengketa kerja, dan pertanyaan hak dasar.',
                            'Useful for online fraud, debt collection, work disputes, and basic rights questions.'
                        ) }}
                    </p>
                </a>
                <a href="{{ $routeLang('action-guide') }}" class="action-card guide">
                    <span class="action-icon">&#129517;</span>
                    <p class="mt-4 font-[var(--font-display)] text-[1.45rem] font-extrabold text-[var(--color-primary)]">{{ $t('Panduan Langkah', 'Action Guide') }}</p>
                    <p class="mt-2 max-w-[16rem] text-[1rem] leading-7 text-[var(--color-muted-text)]">
                        {{ $t(
                            'Ikuti checklist untuk kumpulkan bukti, catat kronologi, dan siapkan laporan.',
                            'Follow a checklist to collect evidence, record the timeline, and prepare a report.'
                        ) }}
                    </p>
                </a>
                <a href="{{ $routeLang('emergency') }}" class="action-card emergency">
                    <span class="action-icon">&#128680;</span>
                    <p class="mt-4 font-[var(--font-display)] text-[1.45rem] font-extrabold text-[var(--color-primary)]">{{ $t('Darurat', 'Emergency') }}</p>
                    <p class="mt-2 max-w-[16rem] text-[1rem] leading-7 text-[var(--color-muted-text)]">
                        {{ $t(
                            'Buka jika kamu sedang ditekan, dipaksa, diperiksa, atau tidak sempat membaca panjang.',
                            'Open this if you are under pressure, being forced, being questioned, or do not have time to read a long page.'
                        ) }}
                    </p>
                </a>
            </div>

            <div class="hero-proof mt-7">
                <article class="hero-proof-card">
                    <p class="eyebrow">{{ $t('Kasus Umum', 'Common Case') }}</p>
                    <p class="mt-2 text-[1.35rem] font-[var(--font-display)] font-extrabold text-[var(--color-primary)]">{{ $t('Penipuan online dan transaksi gagal', 'Online fraud and failed transactions') }}</p>
                </article>
                <article class="hero-proof-card">
                    <p class="eyebrow">{{ $t('Kasus Umum', 'Common Case') }}</p>
                    <p class="mt-2 text-[1.35rem] font-[var(--font-display)] font-extrabold text-[var(--color-primary)]">{{ $t('Kontrak kerja atau surat yang janggal', 'Questionable contracts or letters') }}</p>
                </article>
                <article class="hero-proof-card">
                    <p class="eyebrow">{{ $t('Kasus Umum', 'Common Case') }}</p>
                    <p class="mt-2 text-[1.35rem] font-[var(--font-display)] font-extrabold text-[var(--color-primary)]">{{ $t('Panggilan polisi atau tekanan mendadak', 'Police summons or sudden pressure') }}</p>
                </article>
            </div>
        </div>

        <aside class="hero-side">
            <article class="glow-panel">
                <p class="eyebrow">{{ $t('Masalah yang Bisa Ditangani', 'Problems This App Can Handle') }}</p>
                <h2 class="mt-3 text-[2rem] text-[var(--color-primary)]">{{ $t('Mulai dari masalah nyata yang sering dialami pengguna.', 'Start from real problems that people often face.') }}</h2>
                <ol class="mt-5 grid gap-4 text-[1.05rem] text-[var(--color-muted-text)]">
                    <li class="hero-flow-item"><span>01</span> {{ $t('Ditipu online, barang tidak datang, rekening tujuan menghilang, atau chat penjual mengancam.', 'Online fraud, items not arriving, destination accounts disappearing, or threatening seller chats.') }}</li>
                    <li class="hero-flow-item"><span>02</span> {{ $t('Kontrak kerja, surat pernyataan, atau perjanjian pinjaman yang ingin dicek sebelum ditandatangani.', 'Work contracts, statement letters, or loan agreements that need review before signing.') }}</li>
                    <li class="hero-flow-item"><span>03</span> {{ $t('Situasi mendesak seperti diperiksa, dipaksa mengaku, atau tidak tahu hak apa yang harus dijaga.', 'Urgent situations such as being questioned, being pressured to confess, or not knowing which rights must be protected.') }}</li>
                </ol>
            </article>

            <article class="tool-overview-card">
                <div class="tool-overview-item">
                    <p class="eyebrow">{{ $t('Respon Awal', 'First Response') }}</p>
                    <p class="mt-3 mini-stat-value">AI</p>
                    <p class="mt-2 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Ceritakan masalahmu lalu baca ringkasan awal dan risiko utamanya.', 'Describe your problem and read the first summary and its main risks.') }}</p>
                </div>
                <div class="tool-overview-item">
                    <p class="eyebrow">{{ $t('Panduan Kasus', 'Case Guide') }}</p>
                    <p class="mt-3 mini-stat-value">{{ $t('Guide', 'Guide') }}</p>
                    <p class="mt-2 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Ikuti urutan langkah, bukti, dan tindakan yang perlu disiapkan.', 'Follow the order of steps, evidence, and actions that must be prepared.') }}</p>
                </div>
                <div class="tool-overview-item">
                    <p class="eyebrow">{{ $t('Analisis Dokumen', 'Document Analysis') }}</p>
                    <p class="mt-3 mini-stat-value">{{ $t('Scan', 'Scan') }}</p>
                    <p class="mt-2 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Periksa klausul yang aman, perlu dibaca ulang, atau berpotensi merugikan.', 'Review clauses that are safe, require caution, or may be harmful.') }}</p>
                </div>
            </article>
        </aside>
    </section>

    <section class="mx-auto mt-6 feature-grid max-w-6xl">
        <article class="feature-panel feature-panel-primary">
            <p class="eyebrow">{{ $t('Masalah Hukum yang Sering Dicari', 'Common Legal Questions') }}</p>
            <h2 class="mt-3 text-[2rem] text-[var(--color-primary)]">{{ $t('Pengguna biasanya datang dengan kasus yang sederhana diucapkan, tetapi rumit saat dijelaskan sendiri.', 'People usually arrive with problems that are easy to say but hard to explain alone.') }}</h2>
            <div class="feature-list mt-5">
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('"Saya ditipu transfer"', '"I was scammed by bank transfer"') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Cari langkah awal seperti simpan bukti transfer, chat, dan identitas akun tujuan.', 'Get the first steps such as saving transfer proof, chats, and the destination account identity.') }}</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('"Kontrak ini aman tidak?"', '"Is this contract safe?"') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Gunakan scan dokumen untuk melihat klausul denda, penalti, dan kewajiban sepihak.', 'Use document scan to spot penalty clauses, fines, and one-sided obligations.') }}</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('"Saya dipanggil polisi, harus bagaimana?"', '"I was summoned by the police, what should I do?"') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Masuk ke mode darurat untuk melihat hak yang harus dijaga dan langkah aman berikutnya.', 'Enter emergency mode to see which rights you must protect and the safest next step.') }}</p>
                    </div>
                </div>
            </div>
        </article>

        <article class="feature-panel">
            <p class="eyebrow">{{ $t('Apa yang Bisa Dilakukan di Aplikasi Ini', 'What You Can Do in This App') }}</p>
            <h2 class="mt-3 text-[2rem] text-[var(--color-primary)]">{{ $t('Fitur dibuat untuk membantu pengguna bergerak dari bingung menjadi siap bertindak.', 'The features are designed to help users move from confusion to action.') }}</h2>
            <div class="feature-list mt-5">
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('Tanya AI dengan bahasa sehari-hari', 'Ask AI in plain language') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Tidak perlu istilah hukum. Tulis kejadian, pihak yang terlibat, dan apa yang kamu takutkan.', 'No legal jargon needed. Write the event, the parties involved, and what you are worried about.') }}</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('Ikuti panduan langkah', 'Follow the action guide') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Checklist membantu pengguna tahu bukti apa yang harus disimpan dan ke mana harus melapor.', 'The checklist helps users know which evidence to save and where to report.') }}</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <span class="feature-dot"></span>
                    <div>
                        <p class="font-[var(--font-display)] text-[1.25rem] font-bold text-[var(--color-primary)]">{{ $t('Periksa dokumen sebelum tanda tangan', 'Review documents before signing') }}</p>
                        <p class="mt-1 text-[1rem] text-[var(--color-muted-text)]">{{ $t('Scan dokumen menyorot bagian yang perlu dibaca ulang sebelum pengguna membuat keputusan.', 'Document scan highlights parts that should be reviewed before a decision is made.') }}</p>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
