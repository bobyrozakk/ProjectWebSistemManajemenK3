{{-- ============================================================
    pages/flowchart.blade.php — Halaman Panduan Diagram Alir
    Poin 4: 3 Jenis Flowchart dalam Prosedur K3
    Data diterima dari SmkController@flowchart
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Panduan Diagram Alir Prosedur')
@section('meta_desc', 'Pelajari 3 jenis diagram alir dalam prosedur K3: Diagram Alir Operasi, Fungsional, dan Layout — lengkap dengan simulasi visual CSS.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/flowchart.css') }}">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Panduan Diagram Alir</span>
        </nav>
        <h1><x-ui-icon name="workflow" /> Panduan Diagram Alir Prosedur SMK3</h1>
        <p>Tiga jenis flowchart yang digunakan dalam dokumentasi prosedur keselamatan kerja</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     TIGA KARTU JENIS FLOWCHART
══════════════════════════════════════════════════════════════ --}}
<section class="flowchart-section section" id="jenis-flowchart" aria-labelledby="fc-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Jenis Diagram Alir</span>
            <h2 id="fc-heading">3 Jenis Diagram Alir dalam SMK3</h2>
            <p>Pilih jenis diagram alir yang tepat sesuai kompleksitas dan kebutuhan prosedur K3 Anda.</p>
        </div>

        <div class="flowchart-grid">

            @foreach($jenis_flowchart as $fc)
            <article class="fc-card fc-card--{{ $fc['nomor'] }}" id="fc-{{ $fc['nomor'] }}">

                {{-- Header --}}
                <div class="fc-card__header">
                    <div class="fc-card__num" aria-hidden="true">{{ $fc['nomor'] }}</div>
                    <div class="fc-card__head-info">
                        <div class="fc-card__icon-title">
                            <div class="fc-card__emoji"><x-ui-icon :name="$fc['icon']" /></div>
                            <div>
                                <h2 class="fc-card__title">{{ $fc['nama'] }}</h2>
                                <div class="fc-card__subtitle">{{ $fc['subtitle'] }}</div>
                            </div>
                        </div>
                        <div class="fc-card__penggunaan">
                            <span class="penggunaan-dot" aria-hidden="true"></span>
                            {{ $fc['penggunaan'] }}
                        </div>
                    </div>
                </div>

                {{-- Body: Deskripsi & Visual --}}
                <div class="fc-card__body">

                    {{-- Kiri: Deskripsi & Kelebihan --}}
                    <div class="fc-card__left">
                        <p class="fc-card__desc">{{ $fc['deskripsi'] }}</p>

                        <div class="fc-card__kelebihan-title"><x-ui-icon name="check-circle" /> Kelebihan</div>
                        <ul class="fc-card__kelebihan-list">
                            @foreach($fc['kelebihan'] as $lebih)
                                <li class="fc-card__kelebihan-item">
                                    <em class="check-icon">✓</em>
                                    <span>{{ $lebih }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="fc-card__contoh">
                            <div class="fc-card__contoh-label"><x-ui-icon name="pin" /> Contoh Penggunaan</div>
                            <p>{{ $fc['contoh_penggunaan'] }}</p>
                        </div>
                    </div>

                    {{-- Kanan: Simulasi Visual Flowchart --}}
                    <div class="fc-card__right">
                        <div class="fc-visual" aria-label="Simulasi visual diagram alir {{ $fc['nama'] }}">
                            <div class="fc-visual-title">Simulasi Visual</div>

                            {{-- ─── Diagram Alir Operasi ─── --}}
                            @if($fc['nomor'] === '01')
                                <div class="flow-node flow-node--oval" style="background:#1a3a5c;">
                                    <span class="node-label">▶ MULAI</span>
                                </div>
                                <div class="flow-arrow"></div>

                                <div class="flow-node flow-node--kotak" style="background:#2563eb;">
                                    <span class="node-label">Identifikasi Bahaya K3</span>
                                </div>
                                <div class="flow-arrow"></div>

                                <div class="flow-node flow-node--jajar-genjang" style="background:#f0a500;">
                                    <span class="node-label" style="color:#1a1a1a; text-shadow: 0 1px 2px rgba(255,255,255,0.3);">Risiko Tinggi?</span>
                                </div>
                                <div class="flow-arrow"></div>

                                <div class="flow-node flow-node--kotak" style="background:#7c3aed;">
                                    <span class="node-label">Terapkan Pengendalian</span>
                                </div>
                                <div class="flow-arrow"></div>

                                <div class="flow-node flow-node--kotak" style="background:#059669;">
                                    <span class="node-label">Catat Rekaman K3</span>
                                </div>
                                <div class="flow-arrow"></div>

                                <div class="flow-node flow-node--oval" style="background:#1a3a5c;">
                                    <span class="node-label">■ SELESAI</span>
                                </div>
                            @endif

                            {{-- ─── Diagram Alir Fungsional (Swim Lane) ─── --}}
                            @if($fc['nomor'] === '02')
                                <div class="flow-swimlane" role="table" aria-label="Diagram alir fungsional">
                                    <div class="flow-swimlane__header" role="row">
                                        <div class="flow-swimlane__col-header" role="columnheader">HSE</div>
                                        <div class="flow-swimlane__col-header" role="columnheader">Supervisor</div>
                                        <div class="flow-swimlane__col-header" role="columnheader">Operator</div>
                                        <div class="flow-swimlane__col-header" role="columnheader">HRD</div>
                                    </div>
                                    <div class="flow-swimlane__body" role="row">
                                        <div class="flow-swimlane__lane" role="cell">
                                            <div class="lane-node" style="background:#1a3a5c;">Identifikasi Bahaya</div>
                                            <span class="lane-connect">↓</span>
                                            <div class="lane-node" style="background:#1a3a5c;">Evaluasi Risiko</div>
                                        </div>
                                        <div class="flow-swimlane__lane" role="cell">
                                            <div class="lane-node" style="background:#2563eb;">Review Laporan</div>
                                            <span class="lane-connect">↓</span>
                                            <div class="lane-node" style="background:#2563eb;">Setujui Tindakan</div>
                                        </div>
                                        <div class="flow-swimlane__lane" role="cell">
                                            <div class="lane-node" style="background:#7c3aed;">Laporkan Insiden</div>
                                            <span class="lane-connect">↓</span>
                                            <div class="lane-node" style="background:#7c3aed;">Terapkan SOP</div>
                                        </div>
                                        <div class="flow-swimlane__lane" role="cell">
                                            <div class="lane-node" style="background:#059669;">Catat Rekaman</div>
                                            <span class="lane-connect">↓</span>
                                            <div class="lane-node" style="background:#059669;">Arsip Dokumen</div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- ─── Diagram Alir Layout (Denah) ─── --}}
                            @if($fc['nomor'] === '03')
                                <div class="flow-layout" aria-label="Simulasi diagram alir layout area kerja">
                                    <div style="font-size:var(--text-xs); font-weight:700; color:var(--biru-tua); margin-bottom:var(--space-sm); text-align:center;">
                                        Denah Area Produksi (Skematik)
                                    </div>
                                    <div class="layout-area">
                                        <div class="layout-pos" style="background:#1a3a5c; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.6);">
                                            Gudang Bahan Baku
                                        </div>
                                        <div class="layout-pos" style="background:#059669; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            APAR &amp; P3K
                                        </div>
                                        <div class="layout-pos" style="background:#2563eb; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            Pintu Masuk
                                        </div>
                                        <div class="layout-pos" style="background:#f0a500; font-size:0.55rem; color:#111; font-weight:800;">
                                            Area Produksi
                                        </div>
                                        <div class="layout-pos" style="background:#ef4444; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            Zona Bahaya
                                        </div>
                                        <div class="layout-pos" style="background:#059669; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            Klinik K3
                                        </div>
                                        <div class="layout-pos" style="background:#7c3aed; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            Gudang APD
                                        </div>
                                        <div class="layout-pos" style="background:#1a3a5c; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.6);">
                                            Ruang Kontrol
                                        </div>
                                        <div class="layout-pos" style="background:#2563eb; font-size:0.55rem; color:#fff; text-shadow:0 1px 2px rgba(0,0,0,0.5);">
                                            Pintu Keluar
                                        </div>
                                    </div>
                                    <div style="font-size:0.6rem; color:var(--abu-tua); text-align:center; margin-top:8px;">
                                        → Jalur forklift  ⬡ Jalur evakuasi  ● Pos petugas K3
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     INFO BOX: SIMBOL STANDAR FLOWCHART
══════════════════════════════════════════════════════════════ --}}
<section class="section section-alt" id="simbol" aria-labelledby="simbol-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Referensi Simbol</span>
            <h2 id="simbol-heading">Simbol Standar Diagram Alir (ANSI/ISO)</h2>
            <p>Gunakan simbol yang konsisten agar flowchart mudah dipahami oleh semua pembaca.</p>
        </div>

        {{-- Grid simbol --}}
        <div class="grid-4" style="max-width:800px; margin:0 auto;">

            <div class="card text-center">
                <div style="width:80px; height:40px; background:var(--biru-tua); border-radius:50px; margin:0 auto var(--space-md); display:flex; align-items:center; justify-content:center;">
                    <span style="color:white; font-size:0.7rem; font-weight:700;">MULAI</span>
                </div>
                <h4 style="font-size:var(--text-sm); color:var(--biru-tua);">Terminal</h4>
                <p style="font-size:var(--text-xs);">Titik awal atau akhir proses. Berbentuk oval/kapsul.</p>
            </div>

            <div class="card text-center">
                <div style="width:80px; height:44px; background:var(--biru-muda); border-radius:6px; margin:0 auto var(--space-md); display:flex; align-items:center; justify-content:center;">
                    <span style="color:white; font-size:0.7rem; font-weight:700;">PROSES</span>
                </div>
                <h4 style="font-size:var(--text-sm); color:var(--biru-tua);">Proses</h4>
                <p style="font-size:var(--text-xs);">Langkah atau tindakan yang dilakukan. Berbentuk persegi panjang.</p>
            </div>

            <div class="card text-center">
                <div style="width:60px; height:60px; background:var(--emas); transform:rotate(45deg); margin:0 auto var(--space-md);">
                </div>
                <h4 style="font-size:var(--text-sm); color:var(--biru-tua); margin-top:var(--space-sm);">Keputusan</h4>
                <p style="font-size:var(--text-xs);">Titik percabangan Ya/Tidak. Berbentuk belah ketupat.</p>
            </div>

            <div class="card text-center">
                <div style="width:80px; height:44px; background:var(--hijau); border-radius:6px; margin:0 auto var(--space-md); display:flex; align-items:center; justify-content:center; position:relative;">
                    <div style="position:absolute; bottom:-8px; left:50%; width:0; height:0; border-left:10px solid transparent; border-right:10px solid transparent; border-top:10px solid var(--hijau); transform:translateX(-50%);"></div>
                    <span style="color:white; font-size:0.6rem; font-weight:700;">DOKUMEN</span>
                </div>
                <h4 style="font-size:var(--text-sm); color:var(--biru-tua); margin-top:var(--space-lg);">Dokumen</h4>
                <p style="font-size:var(--text-xs);">Output berupa dokumen atau laporan tercetak.</p>
            </div>

        </div>

    </div>
</section>

@endsection
