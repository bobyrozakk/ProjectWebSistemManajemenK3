{{-- ============================================================
    pages/regulasi.blade.php — Halaman Dasar Hukum & Regulasi K3 BREN
    Data diterima dari SmkController@regulasi
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Dasar Hukum & Regulasi')
@section('meta_desc', 'Pelajari dasar hukum K3 panas bumi PT Barito Renewables Energy Tbk (BREN): UU No. 21/2014, Permen ESDM No. 38/2017, dan PP No. 50/2012.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/regulasi.css') }}?v=1.5">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        {{-- Breadcrumb --}}
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span aria-hidden="true">›</span>
            <span class="current" aria-current="page">Dasar Hukum & Regulasi</span>
        </nav>
        <h1><x-ui-icon name="scale" /> Dasar Hukum & Regulasi K3</h1>
        <p>Landasan hukum nasional dan sektoral yang mengatur penerapan K3 pada kegiatan usaha panas bumi</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     TABEL PERBANDINGAN K3 GEOTHERMAL vs UMUM
     ========================================================== --}}
<section class="comparison-section section" id="perbandingan" aria-labelledby="comparison-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Perbandingan Regulasi</span>
            <h2 id="comparison-heading">K3 Operasi Panas Bumi vs SMK3 Umum</h2>
            <p>Perbedaan fokus keselamatan kerja khusus sektor panas bumi (geothermal) dibandingkan dengan SMK3 Nasional.</p>
        </div>

        <div class="comparison-table-wrap" role="region" aria-label="Tabel Perbandingan K3 Geothermal dan SMK3 Nasional">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th class="col-aspek" scope="col">Aspek Perbandingan</th>
                        <th class="col-ohsas" scope="col">
                            <div class="col-header">
                                <span>K3 Operasi Panas Bumi</span>
                                <span class="col-badge col-badge--int" style="background:rgba(13,148,136,0.12); color:var(--biru-muda);"><x-ui-icon name="globe" /> Geothermal</span>
                            </div>
                        </th>
                        <th class="col-pp" scope="col">
                            <div class="col-header">
                                <span>SMK3 Nasional (PP 50/2012)</span>
                                <span class="col-badge col-badge--nas" style="background:rgba(249,115,22,0.12); color:var(--emas);">Umum</span>
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
     ========================================================== --}}
<section class="regulasi-section section section-alt" id="regulasi-nasional" aria-labelledby="regulasi-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Regulasi Sektoral</span>
            <h2 id="regulasi-heading">Peraturan Perundangan K3 di Indonesia</h2>
            <p>Hierarki regulasi keselamatan kerja umum dan khusus industri energi panas bumi (geothermal).</p>
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
     HIGHLIGHT: UU PANAS BUMI & PP 50/2012
     ========================================================== --}}
<section class="highlight-section section" id="highlight" aria-labelledby="highlight-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Regulasi Kunci</span>
            <h2 id="highlight-heading">Dua Regulasi Utama K3 Panas Bumi</h2>
            <p>Undang-Undang Panas Bumi No. 21/2014 dan PP No. 50/2012 merupakan landasan integrasi keselamatan operasi PT Barito Renewables Energy Tbk.</p>
        </div>

        <div class="highlight-grid">
            {{-- UU Panas Bumi --}}
            <div class="highlight-box highlight-box--permenaker" style="border-top-color: var(--biru-muda);">
                <span class="highlight-box__tag" style="background: rgba(13, 148, 136, 0.1); color: var(--biru-muda);">Hukum Sektoral</span>
                <h3>UU No. 21 Tahun 2014</h3>
                <p>
                    Regulasi khusus yang melandasi tata kelola pemanfaatan energi panas bumi dari eksplorasi hingga eksploitasi di Indonesia dengan mengedepankan aspek perlindungan lingkungan dan keselamatan kerja.
                </p>
                <div class="highlight-box__points">
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--biru-muda);"></span>
                        <span>Mewajibkan standar keselamatan instalasi panas bumi</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--biru-muda);"></span>
                        <span>Mengatur perlindungan lingkungan hidup dan ekosistem</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--biru-muda);"></span>
                        <span>Mengatur kompetensi teknis Kepala Teknik Panas Bumi (KTPB)</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--biru-muda);"></span>
                        <span>Pengawasan ketat oleh Inspektur Panas Bumi EBTKE</span>
                    </div>
                </div>
            </div>

            {{-- PP No. 50/2012 --}}
            <div class="highlight-box highlight-box--pp50" style="border-top-color: var(--emas);">
                <span class="highlight-box__tag" style="background: rgba(249, 115, 22, 0.1); color: var(--emas);">Hukum Nasional</span>
                <h3>PP No. 50 Tahun 2012</h3>
                <p>
                    Peraturan Pemerintah yang mewajibkan seluruh badan usaha dengan tingkat risiko bahaya tinggi seperti Pembangkit Listrik (PLTP) untuk mengintegrasikan manajemen K3 ke dalam sistem manajemen perusahaan.
                </p>
                <div class="highlight-box__points">
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--emas);"></span>
                        <span>Menerapkan 5 prinsip dasar SMK3 secara terpadu</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--emas);"></span>
                        <span>Mencegah kecelakaan kerja dan Penyakit Akibat Kerja (PAK)</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--emas);"></span>
                        <span>Meningkatkan efisiensi dan produktivitas kerja karyawan</span>
                    </div>
                    <div class="highlight-box__point">
                        <span class="highlight-box__point-dot" style="background: var(--emas);"></span>
                        <span>Menyediakan audit berkala untuk sertifikasi kepatuhan</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     TIMELINE REGULASI K3 INDONESIA
     ========================================================== --}}
<section class="timeline-section section section-alt" id="timeline" aria-labelledby="timeline-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Riwayat Regulasi</span>
            <h2 id="timeline-heading">Perjalanan Regulasi K3 & Panas Bumi</h2>
            <p>Evolusi dasar hukum keselamatan kerja dan peraturan panas bumi di Indonesia.</p>
        </div>

        <div class="timeline" role="list">
            @foreach($timeline as $item)
                <div class="timeline-item" role="listitem">
                    <div class="timeline-item__dot" aria-hidden="true" style="background: var(--biru-muda); border-color: var(--putih);"></div>
                    <div class="timeline-item__card">
                        <div class="timeline-item__year" style="color: var(--biru-muda);">{{ $item['tahun'] }}</div>
                        <p class="timeline-item__text">{{ $item['peristiwa'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
