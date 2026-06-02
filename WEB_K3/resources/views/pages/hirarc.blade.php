{{-- ============================================================
    pages/hirarc.blade.php — Halaman Manajemen Risiko & HIRARC
    Poin 6: Hirarki Pengendalian Risiko & Tabel HIRARC
    Data diterima dari SmkController@hirarc
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Manajemen Risiko & HIRARC')
@section('meta_desc', 'Pelajari HIRARC: Hierarki pengendalian risiko K3 (Eliminasi, Substitusi, Engineering, Administrasi, APD) dengan tabel HIRARC contoh dan matriks risiko.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/hirarc.css') }}">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">🏠 Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Manajemen Risiko & HIRARC</span>
        </nav>
        <h1>🛡️ Manajemen Risiko & HIRARC</h1>
        <p>Hazard Identification, Risk Assessment, and Risk Control — fondasi pengendalian bahaya K3</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     PIRAMIDA TERBALIK + DETAIL HIERARKI
══════════════════════════════════════════════════════════════ --}}
<section class="hirarc-pyramid-section section" id="hierarki" aria-labelledby="hierarki-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Hierarki Pengendalian</span>
            <h2 id="hierarki-heading">5 Hierarki Pengendalian Risiko K3</h2>
            <p>
                Selalu utamakan pengendalian dari level paling atas (eliminasi) sebelum menggunakan APD sebagai pilihan terakhir.
            </p>
        </div>

        <div class="hirarc-layout">

            {{-- ── Piramida Terbalik CSS ── --}}
            <div class="inv-pyramid" aria-label="Piramida terbalik hierarki pengendalian risiko K3">
                <div class="inv-pyramid__label-top">
                    ⬆ Paling Efektif — Eliminasi bahaya permanen
                </div>

                @foreach($hierarki as $item)
                    <div class="inv-level inv-level-{{ $item['level'] }}"
                         style="background-color: {{ $item['warna'] }};"
                         role="button"
                         tabindex="0"
                         aria-label="Level {{ $item['level'] }}: {{ $item['nama'] }} — {{ $item['deskripsi'] }}"
                         data-level="{{ $item['level'] }}">
                        <span class="inv-level__icon" aria-hidden="true">{{ $item['icon'] }}</span>
                        <div class="inv-level__text">
                            <div class="inv-level__name">{{ $item['nama'] }}</div>
                            <div class="inv-level__sub">Efektivitas: {{ $item['efektivitas'] }}</div>
                        </div>
                    </div>
                @endforeach

                <div class="inv-pyramid__label-bot">
                    ⬇ Kurang Efektif — Hanya lindungi pekerja, bahaya tetap ada
                </div>
            </div>

            {{-- ── Detail Hierarki ── --}}
            <div class="hierarki-details">
                @foreach($hierarki as $item)
                    <article class="hierarki-card" data-level="{{ $item['level'] }}"
                             style="border-left-color: {{ $item['warna'] }};">
                        <div class="hierarki-card__header">
                            <span class="hierarki-card__icon" aria-hidden="true">{{ $item['icon'] }}</span>
                            <div class="hierarki-card__info">
                                <div class="hierarki-card__level">Level {{ $item['level'] }}</div>
                                <div class="hierarki-card__name">{{ $item['nama'] }}</div>
                            </div>
                            <span class="hierarki-card__efek"
                                  style="background: {{ $item['warna'] }}20; color: {{ $item['warna'] }};">
                                {{ $item['efektivitas'] }}
                            </span>
                        </div>
                        <p class="hierarki-card__desc">{{ $item['deskripsi'] }}</p>
                        <div class="hierarki-card__contoh">
                            <strong>Contoh:</strong> {{ $item['contoh'] }}
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     TABEL HIRARC DUMMY
══════════════════════════════════════════════════════════════ --}}
<section class="hirarc-table-section section section-alt" id="tabel-hirarc" aria-labelledby="tabel-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Contoh Penerapan</span>
            <h2 id="tabel-heading">Contoh Tabel HIRARC — Pekerjaan Industri Manufaktur</h2>
            <p>Tabel HIRARC (Hazard Identification, Risk Assessment, Risk Control) dummy untuk referensi akademik.</p>
        </div>

        <div class="hirarc-table-wrap" role="region" aria-label="Tabel HIRARC dummy">
            <table class="hirarc-table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Aktivitas / Pekerjaan</th>
                        <th scope="col">Bahaya (Hazard)</th>
                        <th scope="col">Risiko (Risk)</th>
                        <th scope="col">Level Risiko</th>
                        <th scope="col">Pengendalian yang Diterapkan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabel_hirarc as $baris)
                        <tr>
                            <td class="td-no">{{ $baris['no'] }}</td>
                            <td class="td-aktivitas">{{ $baris['aktivitas'] }}</td>
                            <td>{{ $baris['bahaya'] }}</td>
                            <td>{{ $baris['risiko'] }}</td>
                            <td>
                                <span class="level-badge {{ $baris['warna_level'] }}">
                                    {{ $baris['level'] }}
                                </span>
                            </td>
                            <td>{{ $baris['pengendalian'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     MATRIKS RISIKO
══════════════════════════════════════════════════════════════ --}}
<section class="matriks-section section" id="matriks" aria-labelledby="matriks-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Alat Bantu</span>
            <h2 id="matriks-heading">Matriks Penilaian Risiko (5×5)</h2>
            <p>Gunakan matriks ini untuk menentukan level risiko berdasarkan kemungkinan dan keparahan dampak.</p>
        </div>

        <div class="matriks-grid">

            {{-- Keterangan Level Risiko --}}
            <div>
                <h3 style="font-size:var(--text-lg); color:var(--biru-tua); margin-bottom:var(--space-lg);">
                    Keterangan Level & Tindakan
                </h3>
                <div class="matriks-keterangan">
                    @foreach($matriks_risiko['keterangan'] as $item)
                        <div class="matriks-item">
                            <div class="matriks-item__skor" style="color:{{ $item['warna'] }};">
                                {{ $item['skor'] }}
                            </div>
                            <div>
                                <div class="matriks-item__level" style="color:{{ $item['warna'] }};">
                                    {{ $item['level'] }}
                                </div>
                                <div class="matriks-item__tindakan">{{ $item['tindakan'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Visual Matriks 5x5 --}}
            <div>
                <h3 style="font-size:var(--text-lg); color:var(--biru-tua); margin-bottom:var(--space-lg);">
                    Matriks Kemungkinan × Keparahan
                </h3>
                <div class="matriks-visual" role="table" aria-label="Matriks risiko 5x5">
                    <div class="matriks-header" role="row">
                        <div class="matriks-header-cell" role="columnheader">K/P</div>
                        <div class="matriks-header-cell" role="columnheader">P1 Jarang</div>
                        <div class="matriks-header-cell" role="columnheader">P2 Kadang</div>
                        <div class="matriks-header-cell" role="columnheader">P3 Sedang</div>
                        <div class="matriks-header-cell" role="columnheader">P4 Sering</div>
                        <div class="matriks-header-cell" role="columnheader">P5 Pasti</div>
                    </div>
                    <div class="matriks-body" role="rowgroup">
                        @php
                        // Data matriks risiko 5x5
                        $matriksData = [
                            ['label' => 'K5 Fatal',    'nilai' => [5,  10, 15, 20, 25], 'warna' => ['#84cc16','#f59e0b','#f97316','#ef4444','#ef4444']],
                            ['label' => 'K4 Berat',    'nilai' => [4,  8,  12, 16, 20], 'warna' => ['#84cc16','#f59e0b','#f97316','#ef4444','#ef4444']],
                            ['label' => 'K3 Sedang',   'nilai' => [3,  6,  9,  12, 15], 'warna' => ['#10b981','#84cc16','#f59e0b','#f97316','#f97316']],
                            ['label' => 'K2 Ringan',   'nilai' => [2,  4,  6,  8,  10], 'warna' => ['#10b981','#10b981','#84cc16','#f59e0b','#f59e0b']],
                            ['label' => 'K1 Diabaikan','nilai' => [1,  2,  3,  4,  5],  'warna' => ['#10b981','#10b981','#10b981','#84cc16','#84cc16']],
                        ];
                        @endphp
                        @foreach($matriksData as $row)
                            <div class="matriks-row" role="row">
                                <div class="matriks-row-label" role="rowheader">{{ $row['label'] }}</div>
                                @foreach($row['nilai'] as $i => $val)
                                    <div class="matriks-cell" role="cell"
                                         style="background: {{ $row['warna'][$i] }};"
                                         aria-label="Skor {{ $val }}">
                                        {{ $val }}
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                <p style="font-size:var(--text-xs); color:var(--abu-tua); margin-top:var(--space-sm); text-align:center;">
                    K = Keparahan (1-5) | P = Kemungkinan (1-5) | Skor = K × P
                </p>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // ── Highlight hierarki card saat klik piramida ───────────────────
    const invLevels   = document.querySelectorAll('.inv-level');
    const hierCards   = document.querySelectorAll('.hierarki-card');

    invLevels.forEach(level => {
        level.addEventListener('click', () => {
            const lvl = level.getAttribute('data-level');
            hierCards.forEach(card => {
                card.style.opacity = '0.4';
                card.style.transform = 'none';
            });
            const target = document.querySelector(`.hierarki-card[data-level="${lvl}"]`);
            if (target) {
                target.style.opacity = '1';
                target.style.transform = 'translateX(8px)';
                target.style.boxShadow = 'var(--shadow-lg)';
                target.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                // Reset setelah 3 detik
                setTimeout(() => {
                    hierCards.forEach(c => {
                        c.style.opacity = '';
                        c.style.transform = '';
                        c.style.boxShadow = '';
                    });
                }, 3000);
            }
        });
        level.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                level.click();
            }
        });
    });
</script>
@endsection
