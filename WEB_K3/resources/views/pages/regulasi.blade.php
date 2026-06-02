{{-- ============================================================
    pages/regulasi.blade.php — Halaman Dasar Hukum & Regulasi
    Poin 2: Dasar Hukum SMK3
    Data diterima dari SmkController@regulasi
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Dasar Hukum & Regulasi')
@section('meta_desc', 'Pelajari dasar hukum SMK3: perbandingan OHSAS 18001 vs PP No. 50/2012, Permenaker 05/1996, dan timeline regulasi K3 di Indonesia.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/regulasi.css') }}">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        {{-- Breadcrumb --}}
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">🏠 Beranda</a>
            <span aria-hidden="true">›</span>
            <span class="current" aria-current="page">Dasar Hukum & Regulasi</span>
        </nav>
        <h1>⚖️ Dasar Hukum & Regulasi SMK3</h1>
        <p>Landasan hukum nasional dan standar internasional yang mengatur penerapan SMK3 di Indonesia</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     TABEL PERBANDINGAN OHSAS vs PP 50
══════════════════════════════════════════════════════════════ --}}
<section class="comparison-section section" id="perbandingan" aria-labelledby="comparison-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Perbandingan Standar</span>
            <h2 id="comparison-heading">OHSAS 18001 vs PP No. 50 Tahun 2012</h2>
            <p>Dua standar utama SMK3 yang sering direferensikan — satu internasional, satu wajib nasional.</p>
        </div>

        <div class="comparison-table-wrap" role="region" aria-label="Tabel Perbandingan OHSAS dan PP 50">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th class="col-aspek" scope="col">Aspek Perbandingan</th>
                        <th class="col-ohsas" scope="col">
                            <div class="col-header">
                                <span>OHSAS 18001</span>
                                <span class="col-badge col-badge--int">🌐 Internasional</span>
                            </div>
                        </th>
                        <th class="col-pp" scope="col">
                            <div class="col-header">
                                <span>PP No. 50/2012</span>
                                <span class="col-badge col-badge--nas">🇮🇩 Nasional</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perbandingan as $baris)
                        <tr>
                            <td class="td-aspek">{{ $baris['aspek'] }}</td>
                            <td class="td-ohsas">{{ $baris['ohsas'] }}</td>
                            <td class="td-pp">{{ $baris['pp50'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     REGULASI NASIONAL (Cards dengan Badge)
══════════════════════════════════════════════════════════════ --}}
<section class="regulasi-section section section-alt" id="regulasi-nasional" aria-labelledby="regulasi-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Regulasi Nasional</span>
            <h2 id="regulasi-heading">Peraturan Perundangan K3 di Indonesia</h2>
            <p>Dari Undang-Undang hingga Peraturan Menteri — hierarki regulasi K3 yang membentuk SMK3.</p>
        </div>

        <div class="regulasi-grid">
            @foreach($regulasi_nasional as $reg)
                <article class="regulasi-card {{ $reg['warna'] }}">
                    <div class="regulasi-card__header">
                        <span class="regulasi-card__kode">{{ $reg['kode'] }}</span>
                        <span class="badge badge-{{ $reg['warna'] }}">{{ $reg['kategori'] }}</span>
                    </div>
                    <h3>{{ $reg['judul'] }}</h3>
                    <p>{{ $reg['isi'] }}</p>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     HIGHLIGHT: PERMENAKER & PP 50
══════════════════════════════════════════════════════════════ --}}
<section class="highlight-section section" id="highlight" aria-labelledby="highlight-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Regulasi Terpenting</span>
            <h2 id="highlight-heading">Dua Regulasi Kunci SMK3</h2>
            <p>Permenaker 05/1996 dan PP No. 50/2012 adalah dua tonggak regulasi SMK3 paling berpengaruh.</p>
        </div>

        <div class="highlight-grid">
            {{-- Permenaker 05/1996 --}}
            <div class="highlight-box highlight-box--permenaker">
                <span class="highlight-box__tag">Sejarah</span>
                <h3>Permenaker No. 05/1996</h3>
                <p>
                    Peraturan pertama yang secara khusus mengatur Sistem Manajemen K3 (SMK3) di Indonesia.
                    Menjadi cikal bakal regulasi SMK3 modern dengan 12 elemen dan 166 kriteria audit yang komprehensif.
                </p>
                <div class="highlight-box__points">
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Mewajibkan SMK3 bagi perusahaan dengan 100+ karyawan</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Memperkenalkan 12 elemen SMK3 pertama kali</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Mengatur audit SMK3 oleh lembaga independent</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Berlaku dari 1996 hingga digantikan PP 50/2012</span>
                    </div>
                </div>
            </div>

            {{-- PP No. 50/2012 --}}
            <div class="highlight-box highlight-box--pp50">
                <span class="highlight-box__tag">Regulasi Aktif</span>
                <h3>PP No. 50 Tahun 2012</h3>
                <p>
                    Peraturan Pemerintah yang saat ini menjadi acuan wajib penerapan SMK3 di Indonesia.
                    Menggantikan Permenaker 05/1996 dengan cakupan yang lebih luas dan penegakan hukum yang lebih kuat.
                </p>
                <div class="highlight-box__points">
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Wajib untuk perusahaan dengan 100+ pekerja atau risiko tinggi</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>5 prinsip dasar SMK3 dengan 12 elemen dan 166 kriteria</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Tingkat pencapaian: Awal (64%), Transisi (64-84%), Lanjutan (>84%)</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot"></span>
                        <span>Sanksi administratif bagi perusahaan yang tidak patuh</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     TIMELINE REGULASI K3 INDONESIA
══════════════════════════════════════════════════════════════ --}}
<section class="timeline-section section section-alt" id="timeline" aria-labelledby="timeline-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Riwayat Regulasi</span>
            <h2 id="timeline-heading">Perjalanan Regulasi K3 di Indonesia</h2>
            <p>Dari 1970 hingga kini — evolusi regulasi K3 yang membentuk SMK3 modern.</p>
        </div>

        <div class="timeline" role="list">
            @foreach($timeline as $item)
                <div class="timeline-item" role="listitem">
                    <div class="timeline-item__dot" aria-hidden="true"></div>
                    <div class="timeline-item__card">
                        <div class="timeline-item__year">{{ $item['tahun'] }}</div>
                        <p class="timeline-item__text">{{ $item['peristiwa'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
