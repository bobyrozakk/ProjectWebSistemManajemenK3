{{-- ============================================================
    pages/pengendalian.blade.php — Halaman Pengendalian Dokumen
    Poin 5: Protokol Pengendalian Dokumen SMK3
    Data diterima dari SmkController@pengendalian
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Pengendalian Dokumen')
@section('meta_desc', 'Protokol pengendalian dokumen SMK3: kriteria minimum dokumen, badge status (Terkendali, Tidak Terkendali, Read Only, Usang), dan aturan dokumen usang.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pengendalian.css') }}">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">🏠 Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Pengendalian Dokumen</span>
        </nav>
        <h1>🗂️ Protokol Pengendalian Dokumen SMK3</h1>
        <p>Standar minimum, status dokumen, dan aturan pengelolaan dokumen yang terkendali</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     CHECKLIST INTERAKTIF
══════════════════════════════════════════════════════════════ --}}
<section class="checklist-section section" id="checklist" aria-labelledby="checklist-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Kriteria Minimum</span>
            <h2 id="checklist-heading">Kriteria Minimum Dokumen SMK3</h2>
            <p>Setiap dokumen SMK3 harus memenuhi kriteria-kriteria ini agar dinyatakan valid dan dapat dikendalikan.</p>
        </div>

        <div class="checklist-layout">

            {{-- ── Checklist Interaktif ── --}}
            <div>
                <div class="checklist-box">
                    <h3 class="checklist-box__title">📋 Daftar Periksa Dokumen</h3>
                    <p class="checklist-box__sub">Centang item berikut untuk memverifikasi kelengkapan dokumen Anda.</p>

                    <div role="list">
                        @foreach($kriteria_dokumen as $index => $kriteria)
                            <label class="checklist-item" role="listitem" id="check-item-{{ $index }}">
                                <input type="checkbox"
                                       id="check-{{ $index }}"
                                       aria-label="{{ $kriteria['item'] }}">
                                <span class="checklist-item__check" aria-hidden="true"></span>
                                <div class="checklist-item__content">
                                    <div class="checklist-item__name">
                                        {{ $kriteria['item'] }}
                                        @if($kriteria['wajib'])
                                            <span class="tag-wajib">WAJIB</span>
                                        @else
                                            <span class="tag-opsional">OPSIONAL</span>
                                        @endif
                                    </div>
                                    <div class="checklist-item__desc">{{ $kriteria['deskripsi'] }}</div>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ── Panel Info ── --}}
            <div class="pengendalian-info">

                {{-- Format Penomoran Dokumen --}}
                <div class="info-card">
                    <div class="info-card__title">📌 Format Penomoran Dokumen</div>
                    <p class="info-card__text">
                        Sistem penomoran dokumen yang konsisten memudahkan pelacakan dan pengendalian.
                        Gunakan format hierarki yang mencerminkan struktur organisasi dan jenis dokumen.
                    </p>
                    <div class="doc-number-example">
                        SMK3 / SOP / K3-HSE / 001
                        <span>Prefix / Jenis Dok / Dept / No. Urut</span>
                    </div>
                    <div class="doc-number-example" style="margin-top:8px;">
                        SMK3 / IK / OPR / 012 / Rev.02
                        <span>Contoh Instruksi Kerja Revisi ke-2</span>
                    </div>
                </div>

                {{-- Tips Praktis --}}
                <div class="info-card" style="background: linear-gradient(135deg, #064e3b, #059669);">
                    <div class="info-card__title">💡 Tips Praktis</div>
                    <p class="info-card__text">
                        Simpan master dokumen di lokasi terpusat dan gunakan sistem manajemen dokumen elektronik
                        untuk memudahkan distribusi, tracking revisi, dan audit trail.
                    </p>
                    <ul style="margin-top:var(--space-md); display:flex; flex-direction:column; gap:var(--space-sm);">
                        <li style="color:rgba(255,255,255,0.75); font-size:var(--text-xs); display:flex; gap:var(--space-sm); align-items:flex-start;">
                            <span>✓</span> Tinjau dokumen minimal sekali per tahun
                        </li>
                        <li style="color:rgba(255,255,255,0.75); font-size:var(--text-xs); display:flex; gap:var(--space-sm); align-items:flex-start;">
                            <span>✓</span> Saat ada perubahan proses, perbarui dokumen dalam 30 hari
                        </li>
                        <li style="color:rgba(255,255,255,0.75); font-size:var(--text-xs); display:flex; gap:var(--space-sm); align-items:flex-start;">
                            <span>✓</span> Gunakan tanda tangan digital untuk efisiensi persetujuan
                        </li>
                        <li style="color:rgba(255,255,255,0.75); font-size:var(--text-xs); display:flex; gap:var(--space-sm); align-items:flex-start;">
                            <span>✓</span> Simpan minimal 3 tahun rekaman audit K3
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     BADGE STATUS DOKUMEN
══════════════════════════════════════════════════════════════ --}}
<section class="status-section section section-alt" id="status" aria-labelledby="status-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Status Dokumen</span>
            <h2 id="status-heading">4 Status Pengendalian Dokumen SMK3</h2>
            <p>Setiap salinan dokumen harus diberi label status yang jelas untuk mencegah penggunaan dokumen yang salah.</p>
        </div>

        <div class="status-grid">
            @foreach($status_dokumen as $status)
                <article class="status-card {{ $status['warna'] }}">
                    <div class="status-card__header">
                        <span class="status-badge-large {{ $status['warna'] }}">
                            {{ $status['kode'] }}
                        </span>
                    </div>
                    <p class="status-card__desc">{{ $status['deskripsi'] }}</p>
                    <div class="status-card__contoh">
                        <strong>Contoh penggunaan:</strong> {{ $status['contoh'] }}
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     INFO BOX DOKUMEN USANG
══════════════════════════════════════════════════════════════ --}}
<section class="usang-section section" id="usang" aria-labelledby="usang-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Penanganan Khusus</span>
            <h2 id="usang-heading">Aturan Penanganan Dokumen Usang (Obsolete)</h2>
            <p>Dokumen usang yang tidak ditangani dengan benar dapat menyebabkan prosedur yang salah dijalankan di lapangan.</p>
        </div>

        <div class="usang-box" role="alert">
            <div class="usang-box__header">
                <span class="usang-box__icon" aria-hidden="true">⚠️</span>
                <div>
                    <div class="usang-box__title" id="usang-heading">Prosedur Penanganan Dokumen Usang</div>
                    <div class="usang-box__subtitle">Wajib diikuti setelah penerbitan revisi baru dokumen manapun</div>
                </div>
            </div>

            <div class="usang-rules" role="list">
                @foreach($aturan_usang as $index => $aturan)
                    <div class="usang-rule" role="listitem">
                        <div class="usang-rule__num">{{ $index + 1 }}</div>
                        <div class="usang-rule__text">{{ $aturan }}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script>
    // ── Counter checklist ────────────────────────────────────────────
    const checkboxes = document.querySelectorAll('.checklist-item input[type="checkbox"]');
    const totalWajib = {{ count(array_filter($kriteria_dokumen, fn($k) => $k['wajib'])) }};

    checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            const checked = document.querySelectorAll('.checklist-item input[type="checkbox"]:checked').length;
            const total   = checkboxes.length;
            // Update label judul checklist
            const title = document.querySelector('.checklist-box__title');
            if (title) {
                title.textContent = `📋 Daftar Periksa Dokumen (${checked}/${total})`;
            }
        });
    });
</script>
@endsection
