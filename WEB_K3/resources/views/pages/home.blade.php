{{-- ============================================================
    pages/home.blade.php — Halaman Beranda
    Poin 1: Pengantar & Fungsi Dokumentasi SMK3
    Data diterima dari SmkController@home
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_desc', 'Pelajari Dokumentasi SMK3 — Sistem Manajemen Keselamatan dan Kesehatan Kerja. Fungsi, manfaat, regulasi, dan template K3 lengkap.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

{{-- ══════════════════════════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════════════════════════ --}}
<section class="hero" id="hero" aria-label="Hero Section">
    {{-- Dekorasi visual --}}
    <div class="hero__decor-1" aria-hidden="true"></div>
    <div class="hero__decor-2" aria-hidden="true"></div>
    <div class="hero__decor-3" aria-hidden="true"></div>

    <div class="container">
        <div class="hero__inner">

            {{-- Konten Teks --}}
            <div class="hero__content">
                {{-- Eyebrow label --}}
                <div class="hero__eyebrow">
                    <span>⛑️</span>
                    <span>Mata Kuliah Keselamatan & Kesehatan Kerja</span>
                </div>

                {{-- Judul utama --}}
                <h1 class="hero__title">
                    Dokumentasi<br>
                    <span class="highlight">SMK3</span> untuk<br>
                    Keselamatan Kerja
                </h1>

                {{-- Subjudul --}}
                <p class="hero__subtitle">
                    Panduan lengkap Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3)
                    — mulai dari regulasi, hierarki dokumen, pengendalian risiko, hingga
                    template siap pakai untuk keperluan akademik.
                </p>

                {{-- Tombol CTA --}}
                <div class="hero__actions">
                    <a href="{{ route('regulasi') }}" class="btn btn-primary" id="cta-pelajari">
                        📖 Pelajari Lebih Lanjut
                    </a>
                    <a href="{{ route('template') }}" class="btn btn-secondary" id="cta-template">
                        📥 Unduh Template
                    </a>
                </div>

                {{-- Fitur singkat --}}
                <div class="hero__features">
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>PP No. 50/2012</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>OHSAS 18001</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>ISO 45001:2018</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>HIRARC</span>
                    </div>
                </div>
            </div>

            {{-- Visual (kartu floating) --}}
            <div class="hero__visual" aria-hidden="true">
                <div class="hero__card-stack">
                    {{-- Kartu info kecil kiri atas --}}
                    <div class="hero__float-card hero__float-card--info">
                        <div class="hero__mini-icon">📚</div>
                        <div class="hero__mini-label">Modul</div>
                        <div class="hero__mini-val">7</div>
                    </div>

                    {{-- Kartu utama tengah --}}
                    <div class="hero__float-card hero__float-card--main">
                        <div class="hero__stat-row">
                            <span class="hero__stat-icon">📋</span>
                            <div>
                                <div class="hero__stat-label">Regulasi K3</div>
                                <div class="hero__stat-val">PP No. 50/2012</div>
                            </div>
                        </div>
                        <div class="hero__stat-row">
                            <span class="hero__stat-icon">🏆</span>
                            <div>
                                <div class="hero__stat-label">Standar Internasional</div>
                                <div class="hero__stat-val">ISO 45001:2018</div>
                            </div>
                        </div>
                        <div class="hero__stat-row">
                            <span class="hero__stat-icon">🛡️</span>
                            <div>
                                <div class="hero__stat-label">Pengendalian Risiko</div>
                                <div class="hero__stat-val">5 Hierarki</div>
                            </div>
                        </div>
                    </div>

                    {{-- Kartu kecil kanan bawah --}}
                    <div class="hero__float-card hero__float-card--badge">
                        <div class="hero__mini-icon">⚡</div>
                        <div class="hero__mini-label">Template</div>
                        <div class="hero__mini-val">6+</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     STATISTIK ANIMASI
══════════════════════════════════════════════════════════════ --}}
<section class="stats-section" aria-label="Statistik Website">
    <div class="container">
        <div class="stats-grid">
            @foreach($statistik as $stat)
                <div class="stat-item">
                    <span class="stat-item__icon" aria-hidden="true">{{ $stat['icon'] }}</span>
                    <span class="stat-item__number"
                          data-count="{{ $stat['angka'] }}"
                          aria-label="{{ $stat['angka'] }} {{ $stat['label'] }}">
                        0
                    </span>
                    <span class="stat-item__label">{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     FUNGSI UTAMA SMK3
══════════════════════════════════════════════════════════════ --}}
<section class="fungsi-section section" id="fungsi" aria-labelledby="fungsi-heading">
    <div class="container">

        {{-- Header section --}}
        <div class="section-header">
            <span class="label">Fungsi Dokumentasi</span>
            <h2 id="fungsi-heading">3 Fungsi Utama Dokumentasi SMK3</h2>
            <p>
                Dokumentasi SMK3 bukan sekadar formalitas — ini adalah fondasi sistem
                keselamatan kerja yang efektif dan terukur.
            </p>
        </div>

        {{-- Grid kartu fungsi --}}
        <div class="fungsi-grid">
            @foreach($fungsi as $item)
                <article class="fungsi-card {{ $item['warna'] }}">
                    <div class="fungsi-card__icon-wrap" aria-hidden="true">
                        {{ $item['icon'] }}
                    </div>
                    <h3>{{ $item['judul'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     MANFAAT DOKUMENTASI
══════════════════════════════════════════════════════════════ --}}
<section class="manfaat-section section section-alt" id="manfaat" aria-labelledby="manfaat-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Manfaat Dokumentasi</span>
            <h2 id="manfaat-heading">Mengapa Dokumentasi SMK3 Penting?</h2>
            <p>
                Dokumentasi yang baik menjadi tulang punggung implementasi K3
                yang konsisten, terukur, dan dapat diaudit.
            </p>
        </div>

        <div class="manfaat-grid">
            @foreach($manfaat as $item)
                <article class="manfaat-card">
                    <div class="manfaat-card__icon" aria-hidden="true">{{ $item['icon'] }}</div>
                    <div class="manfaat-card__body">
                        <h4>{{ $item['judul'] }}</h4>
                        <p>{{ $item['deskripsi'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════════════════════════ --}}
<section class="cta-banner" id="cta" aria-label="Call to Action">
    <div class="container">
        <h2>Siap Mempelajari SMK3 Secara Lengkap?</h2>
        <p>
            Jelajahi 7 modul pembelajaran komprehensif — dari regulasi hingga
            template siap unduh untuk kebutuhan akademik Anda.
        </p>
        <div class="cta-banner__actions">
            <a href="{{ route('tingkatan') }}" class="btn btn-primary" id="cta-mulai">
                🚀 Mulai dari Level Dokumen
            </a>
            <a href="{{ route('hirarc') }}" class="btn btn-secondary" id="cta-hirarc">
                🛡️ Pelajari HIRARC
            </a>
        </div>
    </div>
</section>

@endsection
