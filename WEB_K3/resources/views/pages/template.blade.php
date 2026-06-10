{{-- ============================================================
    pages/template.blade.php — Halaman Pusat Unduhan Template
    Poin 7: Template K3 (6 kartu download dummy)
    Data diterima dari SmkController@template
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Pusat Unduhan Template K3')
@section('meta_desc', 'Unduh 6 template K3 gratis: Formulir Kecelakaan, Lembar Inspeksi, Daftar Hadir Rapat, Notulen, Formulir Medis, dan Jadwal Latihan Darurat. Untuk keperluan akademik.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/template.css') }}?v=1.5">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Pusat Unduhan Template</span>
        </nav>
        <h1><x-ui-icon name="download" /> Pusat Unduhan Template PT Barito Renewables Energy Tbk</h1>
        <p>6 template dokumen administrasi K3 operasional panas bumi PT Barito Renewables Energy Tbk siap pakai</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     GRID KARTU TEMPLATE
══════════════════════════════════════════════════════════════ --}}
<section class="template-section section" id="template-grid" aria-labelledby="template-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Template Tersedia</span>
            <h2 id="template-heading">6 Template K3 Siap Unduh</h2>
            <p>Setiap template dirancang sesuai standar SMK3 dan PP No. 50/2012. Gratis untuk keperluan akademik.</p>
        </div>

        {{-- Grid Template --}}
        <div class="template-grid" role="list">
            @foreach($templates as $tmpl)
                <article class="template-card format-{{ strtolower($tmpl['format']) }}"
                         role="listitem"
                         id="template-card-{{ $tmpl['id'] }}">

                    {{-- Header --}}
                    <div class="template-card__header">
                        <div class="template-card__icon-wrap">
                            <x-ui-icon :name="$tmpl['icon']" />
                        </div>
                        <div class="template-card__head-info">
                            <div class="template-card__kategori">{{ $tmpl['kategori'] }}</div>
                            <h3 class="template-card__nama">{{ $tmpl['nama'] }}</h3>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="template-card__body">
                        <p class="template-card__desc">{{ $tmpl['deskripsi'] }}</p>
                    </div>

                    {{-- Meta Info --}}
                    <div class="template-card__meta">
                        <span class="meta-badge format-{{ strtolower($tmpl['format']) }}"
                              aria-label="Format file {{ $tmpl['format'] }}">
                            <x-ui-icon name="file-text" /> {{ $tmpl['format'] }}
                        </span>
                        <span class="meta-badge meta-badge--size">
                            {{ $tmpl['ukuran'] }}
                        </span>
                        <span class="meta-badge meta-badge--revisi">
                            <x-ui-icon name="workflow" /> {{ $tmpl['revisi'] }}
                        </span>
                    </div>

                    {{-- Tombol Unduh --}}
                    <div class="template-card__footer">
                        <a href="#"
                           class="btn-unduh"
                           id="unduh-{{ $tmpl['id'] }}"
                           role="button"
                           aria-label="Unduh template {{ $tmpl['nama'] }} format {{ $tmpl['format'] }}"
                           onclick="handleUnduh(event, '{{ $tmpl['nama_file'] }}', '{{ $tmpl['format'] }}')">
                            <span class="format-dot" aria-hidden="true"></span>
                            <x-ui-icon name="download" />
                            <span>Unduh Template</span>
                            <span class="unduh-arrow" aria-hidden="true">↓</span>
                        </a>
                    </div>

                </article>
            @endforeach
        </div>

        {{-- Banner Disclaimer --}}
        <div class="disclaimer-banner" role="note" aria-label="Pernyataan disclaimer">
            <x-ui-icon name="book" class="disclaimer-banner__icon" />
            <div class="disclaimer-banner__text">
                <div class="disclaimer-banner__title"><x-ui-icon name="alert-triangle" /> Catatan Penting - Disclaimer Akademik</div>
                <div class="disclaimer-banner__desc">
                    Semua template di halaman ini bersifat <strong>edukatif untuk keperluan akademik</strong> semata.
                    Template tidak mengandung file asli yang dapat diunduh. Gunakan sebagai referensi
                    format dan konten saat membuat dokumen K3 nyata di perusahaan.
                    Sesuaikan selalu dengan regulasi dan kebijakan internal organisasi Anda.
                </div>
            </div>
            <div class="disclaimer-banner__badge" aria-hidden="true">
                Tujuan Akademik
            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     CARA PENGGUNAAN TEMPLATE
══════════════════════════════════════════════════════════════ --}}
<section class="cara-penggunaan section" id="cara-penggunaan" aria-labelledby="cara-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Panduan Penggunaan</span>
            <h2 id="cara-heading">Cara Menggunakan Template K3</h2>
            <p>Ikuti langkah berikut untuk mengadaptasi template ini sesuai kebutuhan organisasi Anda.</p>
        </div>

        <div class="cara-grid">
            <div class="cara-card">
                <div class="cara-card__num" aria-hidden="true">1</div>
                <x-ui-icon name="download" class="cara-card__icon" />
                <h4>Unduh Template</h4>
                <p>Pilih template yang sesuai kebutuhan dan klik tombol "Unduh Template".</p>
            </div>

            <div class="cara-card">
                <div class="cara-card__num" aria-hidden="true">2</div>
                <x-ui-icon name="edit" class="cara-card__icon" />
                <h4>Sesuaikan Konten</h4>
                <p>Edit header, logo perusahaan, nomor dokumen, dan konten sesuai organisasi Anda.</p>
            </div>

            <div class="cara-card">
                <div class="cara-card__num" aria-hidden="true">3</div>
                <x-ui-icon name="check-circle" class="cara-card__icon" />
                <h4>Dapatkan Persetujuan</h4>
                <p>Ajukan ke supervisor atau manajemen untuk review dan tanda tangan persetujuan.</p>
            </div>

            <div class="cara-card">
                <div class="cara-card__num" aria-hidden="true">4</div>
                <x-ui-icon name="folder" class="cara-card__icon" />
                <h4>Distribusi & Arsip</h4>
                <p>Distribusikan dokumen yang telah disetujui dan simpan dalam sistem pengarsipan K3.</p>
            </div>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script>
    /**
     * handleUnduh — Simulasi klik unduh dengan feedback visual
     * (File sebenarnya tidak ada — dummy untuk keperluan demo)
     */
    function handleUnduh(event, namaFile, format) {
        event.preventDefault();
        const btn = event.currentTarget;

        // Feedback visual
        const originalText = btn.innerHTML;
        btn.textContent = 'Mempersiapkan...';
        btn.style.opacity = '0.7';
        btn.style.cursor  = 'wait';

        setTimeout(() => {
            btn.textContent = 'Simulasi Berhasil!';
            btn.style.background = '#059669';
            btn.style.opacity    = '1';
            btn.style.cursor     = 'pointer';

            setTimeout(() => {
                btn.innerHTML        = originalText;
                btn.style.background = '';
            }, 2000);
        }, 1000);
    }
</script>
@endsection
