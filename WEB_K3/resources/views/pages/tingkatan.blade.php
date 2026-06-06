{{-- ============================================================
    pages/tingkatan.blade.php — Halaman Level Dokumen SMK3
    Poin 3: Hierarki / Level Dokumen SMK3
    Data diterima dari SmkController@tingkatan
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Level Dokumen SMK3')
@section('meta_desc', 'Pelajari 4 level hierarki dokumen SMK3: Manual, Prosedur, Instruksi Kerja, dan Rekaman. Visualisasi piramida interaktif dengan deskripsi lengkap.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tingkatan.css') }}">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Level Dokumen SMK3</span>
        </nav>
        <h1><x-ui-icon name="layers" /> Level Dokumen SMK3</h1>
        <p>Hierarki 4 level dokumen — dari kebijakan tertinggi hingga rekaman pelaksanaan</p>
    </div>
</header>

{{-- ══════════════════════════════════════════════════════════════
     VISUALISASI PIRAMIDA + DETAIL CARDS
══════════════════════════════════════════════════════════════ --}}
<section class="piramida-section section" id="piramida" aria-labelledby="piramida-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Hierarki Dokumen</span>
            <h2 id="piramida-heading">Piramida 4 Level Dokumen SMK3</h2>
            <p>Setiap level memiliki cakupan, pengguna, dan tujuan yang berbeda — dari strategis hingga operasional.</p>
        </div>

        <div class="piramida-layout">

            {{-- ── Piramida Visual (CSS Murni) ── --}}
            <div class="piramida-container" aria-label="Visualisasi piramida level dokumen SMK3">
                <div class="piramida-label-top">
                    <span class="piramida-arrow-up">▲</span>
                    Paling Strategis / Terbatas
                </div>

                @foreach($levels as $level)
                    <div class="pir-level pir-level-{{ $level['level'] }}"
                         role="button"
                         tabindex="0"
                         aria-label="Level {{ $level['level'] }}: {{ $level['nama'] }}"
                         title="{{ $level['deskripsi'] }}"
                         data-level="{{ $level['level'] }}">
                        <div class="pir-level__inner">
                            <span class="pir-level__icon"><x-ui-icon :name="$level['icon']" /></span>
                            <div class="pir-level__info">
                                <div class="pir-level__num">LEVEL {{ $level['level'] }}</div>
                                <div class="pir-level__name">{{ $level['nama'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="piramida-label-bot">
                    <span style="color:var(--hijau)">▼</span>
                    Paling Operasional / Luas
                </div>
            </div>

            {{-- ── Detail Cards ── --}}
            <div class="level-details">
                @foreach($levels as $level)
                    <article class="level-detail-card" data-level="{{ $level['level'] }}">
                        <div class="level-detail-card__header">
                            <div class="level-detail-card__badge"><x-ui-icon :name="$level['icon']" /></div>
                            <div class="level-detail-card__title">
                                <div class="level-detail-card__num">Level {{ $level['level'] }}</div>
                                <div class="level-detail-card__name">{{ $level['nama'] }}</div>
                            </div>
                        </div>

                        <p class="level-detail-card__desc">{{ $level['deskripsi'] }}</p>

                        <div class="level-detail-card__meta">
                            <div class="meta-item">
                                <div class="meta-item__label"><x-ui-icon name="file-text" /> Isi Dokumen</div>
                                <div class="meta-item__val">{{ $level['isi'] }}</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-item__label"><x-ui-icon name="user" /> Pengguna</div>
                                <div class="meta-item__val">{{ $level['pengguna'] }}</div>
                            </div>
                        </div>

                        <div class="level-detail-card__examples">
                            @foreach($level['contoh'] as $contoh)
                                <span class="example-tag">{{ $contoh }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     TABEL RINGKASAN
══════════════════════════════════════════════════════════════ --}}
<section class="tabel-section section section-alt" id="ringkasan" aria-labelledby="ringkasan-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Ringkasan</span>
            <h2 id="ringkasan-heading">Tabel Ringkasan Level Dokumen SMK3</h2>
            <p>Perbandingan cepat keempat level dokumen dalam satu tampilan tabel.</p>
        </div>

        <div class="ringkasan-table-wrap" role="region" aria-label="Tabel ringkasan level dokumen SMK3">
            <table class="ringkasan-table">
                <thead>
                    <tr>
                        <th scope="col">Level</th>
                        <th scope="col">Nama Dokumen</th>
                        <th scope="col">Isi / Konten Utama</th>
                        <th scope="col">Pengguna Utama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabel_ringkasan as $baris)
                        <tr class="row-level-{{ $baris['level'] }}">
                            <td class="td-level">{{ $baris['level'] }}</td>
                            <td class="td-nama">{{ $baris['nama'] }}</td>
                            <td>{{ $baris['isi'] }}</td>
                            <td>{{ $baris['pengguna'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script>
    // ── Interaksi piramida & detail card ────────────────────────────
    const pirLevels  = document.querySelectorAll('.pir-level');
    const detailCards = document.querySelectorAll('.level-detail-card');

    function highlightLevel(levelNum) {
        // Reset semua
        detailCards.forEach(card => card.classList.remove('active'));
        // Aktifkan yang sesuai
        const targetCard = document.querySelector(`.level-detail-card[data-level="${levelNum}"]`);
        if (targetCard) {
            targetCard.classList.add('active');
            targetCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    pirLevels.forEach(level => {
        level.addEventListener('click', () => {
            const lvl = level.getAttribute('data-level');
            highlightLevel(lvl);
        });
        // Aksesibilitas keyboard
        level.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const lvl = level.getAttribute('data-level');
                highlightLevel(lvl);
            }
        });
    });
</script>
@endsection
