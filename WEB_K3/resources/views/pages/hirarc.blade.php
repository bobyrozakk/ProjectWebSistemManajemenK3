{{-- ============================================================
    pages/hirarc.blade.php — Halaman Manajemen Risiko & HIRARC BREN
    Data diterima dari SmkController@hirarc
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Identifikasi Bahaya & HIRARC')
@section('meta_desc', 'Pelajari Identifikasi Bahaya K3 (HIRARC) di PT Barito Renewables Energy Tbk (BREN). Peta risiko Wellpad, Turbin, Cooling Tower, dan Switchyard.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/hirarc.css') }}?v=1.5">
    <style>
        /* Aksen tombol filter interaktif */
        .filter-container {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-sm);
            margin-bottom: var(--space-lg);
            justify-content: center;
        }
        .filter-btn {
            padding: 8px 18px;
            border-radius: var(--radius-full);
            font-size: var(--text-sm);
            font-weight: 600;
            background: var(--putih);
            border: 1px solid var(--abu-sedang);
            color: var(--abu-tua);
            transition: all var(--transition-fast);
        }
        .filter-btn:hover {
            border-color: var(--biru-muda);
            color: var(--biru-muda);
        }
        .filter-btn.active {
            background: var(--biru-muda);
            border-color: var(--biru-muda);
            color: var(--putih);
            box-shadow: var(--shadow-biru);
        }
    </style>
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Identifikasi Bahaya & HIRARC</span>
        </nav>
        <h1><x-ui-icon name="shield" /> Identifikasi Bahaya & HIRARC</h1>
        <p>Hazard Identification, Risk Assessment, and Risk Control — K3 Operasi Geothermal PT Barito Renewables Energy Tbk</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     PIRAMIDA TERBALIK + DETAIL HIERARKI
     ========================================================== --}}
<section class="hirarc-pyramid-section section" id="hierarki" aria-labelledby="hierarki-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Hierarki Pengendalian</span>
            <h2 id="hierarki-heading">5 Hierarki Pengendalian Risiko K3</h2>
            <p>
                Metode terstruktur PT Barito Renewables Energy Tbk untuk mengendalikan risiko di lapangan, mendahulukan Eliminasi sebelum menggunakan APD.
            </p>
        </div>

        <div class="hirarc-layout">

            {{-- ── Piramida Terbalik CSS ── --}}
            <div class="inv-pyramid" aria-label="Piramida terbalik hierarki pengendalian risiko K3">
                <div class="inv-pyramid__label-top">
                    ⬆ Paling Efektif — Mengeliminasi bahaya di hulu
                </div>

                @foreach($hierarki as $item)
                    <div class="inv-level inv-level-{{ $item['level'] }}"
                         style="background-color: {{ $item['warna'] }};"
                         role="button"
                         tabindex="0"
                         aria-label="Level {{ $item['level'] }}: {{ $item['nama'] }} — {{ $item['deskripsi'] }}"
                         data-level="{{ $item['level'] }}">
                         <span class="inv-level__icon"><x-ui-icon :name="$item['icon']" /></span>
                         <div class="inv-level__text">
                             <div class="inv-level__name">{{ $item['nama'] }}</div>
                             <div class="inv-level__sub">Efektivitas: {{ $item['efektivitas'] }}</div>
                         </div>
                    </div>
                @endforeach

                <div class="inv-pyramid__label-bot">
                    ⬇ Kurang Efektif — Pelindung terakhir di hilir (pekerja)
                </div>
            </div>

            {{-- ── Detail Hierarki ── --}}
            <div class="hierarki-details">
                @foreach($hierarki as $item)
                    <article class="hierarki-card" data-level="{{ $item['level'] }}"
                             style="border-left-color: {{ $item['warna'] }};">
                        <div class="hierarki-card__header">
                            <span class="hierarki-card__icon" style="color: {{ $item['warna'] }};"><x-ui-icon :name="$item['icon']" /></span>
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
                            <strong>Penerapan di PLTP:</strong> {{ $item['contoh'] }}
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     TABEL HIRARC GEOTHERMAL BREN
     ========================================================== --}}
<section class="hirarc-table-section section section-alt" id="tabel-hirarc" aria-labelledby="tabel-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Identifikasi Bahaya</span>
            <h2 id="tabel-heading">Matriks HIRARC Operasional Geothermal</h2>
            <p>Daftar bahaya spesifik, potensi risiko, dan tindakan mitigasi pengendalian K3 di setiap area kerja PLTP PT Barito Renewables Energy Tbk.</p>
        </div>

        {{-- Filter Interaktif Area Kerja --}}
        <div class="filter-container">
            <button class="filter-btn active" data-filter="all">Semua Area</button>
            <button class="filter-btn" data-filter="wellpad">Wellpad</button>
            <button class="filter-btn" data-filter="powerhouse">Power House</button>
            <button class="filter-btn" data-filter="coolingtower">Cooling Tower</button>
            <button class="filter-btn" data-filter="switchyard">Switchyard</button>
        </div>

        <div class="hirarc-table-wrap" role="region" aria-label="Tabel HIRARC Geothermal BREN">
            <table class="hirarc-table">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">No.</th>
                        <th scope="col" style="width: 25%;">Area Operasional</th>
                        <th scope="col" style="width: 25%;">Sumber Bahaya (Hazard)</th>
                        <th scope="col" style="width: 20%;">Potensi Risiko (Risk)</th>
                        <th scope="col" style="width: 10%;">Tingkat</th>
                        <th scope="col" style="width: 15%;">Pengendalian & APD</th>
                    </tr>
                </thead>
                <tbody id="hirarc-tbody">
                    @foreach($tabel_hirarc as $baris)
                        @php
                            // tentukan filter class berdasarkan aktivitas
                            $filterClass = '';
                            if (str_contains(strtolower($baris['aktivitas']), 'wellpad')) {
                                $filterClass = 'wellpad';
                            } elseif (str_contains(strtolower($baris['aktivitas']), 'turbin') || str_contains(strtolower($baris['aktivitas']), 'power house')) {
                                $filterClass = 'powerhouse';
                            } elseif (str_contains(strtolower($baris['aktivitas']), 'pendingin') || str_contains(strtolower($baris['aktivitas']), 'cooling')) {
                                $filterClass = 'coolingtower';
                            } elseif (str_contains(strtolower($baris['aktivitas']), 'switchyard') || str_contains(strtolower($baris['aktivitas']), 'gardu')) {
                                $filterClass = 'switchyard';
                            }
                        @endphp
                        <tr data-area="{{ $filterClass }}">
                            <td class="td-no">{{ $baris['no'] }}</td>
                            <td class="td-aktivitas" style="font-weight:700; color:var(--biru-tua);">
                                {{ $baris['aktivitas'] }}
                            </td>
                            <td style="white-space: pre-line;">{!! $baris['bahaya'] !!}</td>
                            <td>{{ $baris['risiko'] }}</td>
                            <td>
                                <span class="level-badge {{ $baris['warna_level'] }}">
                                    {{ $baris['level'] }}
                                </span>
                            </td>
                            <td style="font-size: var(--text-xs); line-height: 1.5; color: var(--abu-tua);">
                                {{ $baris['pengendalian'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     MATRIKS RISIKO
     ========================================================== --}}
<section class="matriks-section section" id="matriks" aria-labelledby="matriks-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Matriks Penilaian</span>
            <h2 id="matriks-heading">Matriks Penilaian Risiko (5×5)</h2>
            <p>Matriks evaluasi keparahan (severity) × kemungkinan (probability) untuk menetapkan level risiko bahaya.</p>
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
    // ── Filter Interaktif Area Kerja ────────────────────────────────
    const filterButtons = document.querySelectorAll('.filter-btn');
    const tableRows     = document.querySelectorAll('#hirarc-tbody tr');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Hapus kelas aktif dari semua tombol
            filterButtons.forEach(b => b.classList.remove('active'));
            // Tambahkan kelas aktif ke tombol yang diklik
            btn.classList.add('active');

            const filterVal = btn.getAttribute('data-filter');

            tableRows.forEach(row => {
                const areaVal = row.getAttribute('data-area');
                if (filterVal === 'all' || areaVal === filterVal) {
                    row.style.display = '';
                    row.style.opacity = '1';
                } else {
                    row.style.display = 'none';
                    row.style.opacity = '0';
                }
            });
        });
    });

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
