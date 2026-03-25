@extends('layouts.legaltech')

@section('title', 'Contact | Lex Innovate')
@section('eyebrow', 'Contact')

@section('content')
    <section class="grid gap-6 xl:grid-cols-[minmax(0,1.1fr)_minmax(0,0.9fr)]">
        <article class="flat-panel p-6 md:p-8 lg:p-10">
            <p class="section-kicker">Case Intake</p>
            <h1 class="mt-5 max-w-4xl text-6xl uppercase md:text-7xl lg:text-[7rem]">Form singkat untuk triase awal.</h1>
            <p class="mt-8 max-w-3xl">
                Tiga field saja: nama, jenis perkara, dan ringkasan kasus.
            </p>

            @if (session('status'))
                <div class="alert-panel mt-8 p-5" role="status" aria-live="polite">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="mt-8 grid gap-5">
                @csrf
                <div>
                    <label for="name" class="mb-2 block font-[var(--font-display)] text-2xl uppercase">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" class="field-input" required>
                    @error('name')
                        <p class="mt-2 text-[1.125rem] text-[var(--color-alert)]">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="case_type" class="mb-2 block font-[var(--font-display)] text-2xl uppercase">Case Type</label>
                    <input id="case_type" name="case_type" type="text" value="{{ old('case_type') }}" class="field-input" required>
                    @error('case_type')
                        <p class="mt-2 text-[1.125rem] text-[var(--color-alert)]">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="mb-2 block font-[var(--font-display)] text-2xl uppercase">Message</label>
                    <textarea id="message" name="message" rows="6" class="field-input" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-2 text-[1.125rem] text-[var(--color-alert)]">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="cta-link w-full text-left">Kirim Asesmen Awal</button>
            </form>
        </article>

        <aside class="grid gap-6">
            <article class="flat-panel p-6">
                <p class="section-kicker">Why 3 Fields</p>
                <p class="mt-4">Lebih cepat diisi saat pengguna sedang butuh bantuan.</p>
            </article>
            <article class="alert-panel p-6">
                <p class="section-kicker">Priority Signal</p>
                <p class="mt-4">Kasus dengan tenggat atau risiko tinggi bisa diprioritaskan.</p>
            </article>
            <article class="flat-panel p-6">
                <p class="section-kicker">Next Step</p>
                <p class="mt-4">Setelah dikirim, pengguna masuk ke validasi awal dan tindak lanjut.</p>
            </article>
        </aside>
    </section>
@endsection
