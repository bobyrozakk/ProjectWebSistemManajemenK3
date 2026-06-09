{{-- ============================================================
    pages/home.blade.php — Halaman Beranda K3 BREN
    Data diterima dari SmkController@home
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_desc', 'Pelajari Sistem Manajemen K3 PT Barito Renewables Energy Tbk (BREN) & Star Energy Geothermal. Visi misi, statistik kapasitas PLTP, dan regulasi panas bumi.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=1.5">
@endsection

@section('content')

{{-- ══════════════════════════════════════════════════════════════
     HERO SECTION
     ========================================================== --}}
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
                    <x-ui-icon name="zap" class="hero__eyebrow-icon" />
                    <span>Mata Kuliah Keselamatan & Kesehatan Kerja</span>
                </div>

                {{-- Judul utama --}}
                <h1 class="hero__title" style="font-size: clamp(1.8rem, 4.5vw, 3rem); line-height: 1.2;">
                    K3 Geothermal<br>
                    <span class="highlight">PT Barito Renewables Energy Tbk</span>
                </h1>

                {{-- Subjudul --}}
                <p class="hero__subtitle">
                    Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3) kelas dunia
                    pada hulu-hilir Pembangkit Listrik Tenaga Panas Bumi (PLTP) guna mencegah kecelakaan fatal (Zero Accident).
                </p>

                {{-- Tombol CTA --}}
                <div class="hero__actions">
                    <a href="{{ route('regulasi') }}" class="btn btn-primary" id="cta-pelajari">
                        <x-ui-icon name="book" />
                        Pelajari Regulasi
                    </a>
                    <a href="{{ route('template') }}" class="btn btn-secondary" id="cta-template">
                        <x-ui-icon name="download" />
                        Unduh Template
                    </a>
                </div>

                {{-- Fitur singkat --}}
                <div class="hero__features">
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>Geothermal Energy</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>Gas H2S Control</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>High Voltage Safety</span>
                    </div>
                    <div class="hero__feature">
                        <span class="hero__feature-dot" aria-hidden="true"></span>
                        <span>Zero Accident</span>
                    </div>
                </div>
            </div>

            {{-- Visual (kartu floating) --}}
            <div class="hero__visual" aria-hidden="true">
                <div class="hero__card-stack">
                    {{-- Kartu info kecil kiri atas --}}
                    <div class="hero__float-card hero__float-card--info">
                        <x-ui-icon name="factory" class="hero__mini-icon" />
                        <div class="hero__mini-label">Total Daya</div>
                        <div class="hero__mini-val">875 MW</div>
                    </div>

                    {{-- Kartu utama tengah --}}
                    <div class="hero__float-card hero__float-card--main">
                        <div class="hero__stat-row">
                            <x-ui-icon name="briefcase" class="hero__stat-icon" />
                            <div>
                                <div class="hero__stat-label">Area Wellpad & Pipa</div>
                                <div class="hero__stat-val">Uap Suhu Tinggi</div>
                            </div>
                        </div>
                        <div class="hero__stat-row">
                            <x-ui-icon name="radio" class="hero__stat-icon" />
                            <div>
                                <div class="hero__stat-label">Gas Beracun</div>
                                <div class="hero__stat-val">Deteksi Gas H2S</div>
                            </div>
                        </div>
                        <div class="hero__stat-row">
                            <x-ui-icon name="shield" class="hero__stat-icon" />
                            <div>
                                <div class="hero__stat-label">Komitmen Utama</div>
                                <div class="hero__stat-val">Zero Accident</div>
                            </div>
                        </div>
                    </div>

                    {{-- Kartu kecil kanan bawah --}}
                    <div class="hero__float-card hero__float-card--badge">
                        <x-ui-icon name="award" class="hero__mini-icon" />
                        <div class="hero__mini-label">Sertifikat</div>
                        <div class="hero__mini-val">SMK3 & ISO</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     STATISTIK ANIMASI
     ========================================================== --}}
<section class="stats-section" aria-label="Statistik Website">
    <div class="container">
        <div class="stats-grid">
            @foreach($statistik as $stat)
                <div class="stat-item">
                    <x-ui-icon :name="$stat['icon']" class="stat-item__icon" />
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
     AREA OPERASIONAL GEOTHERMAL
     ========================================================== --}}
<section class="fungsi-section section" id="fungsi" aria-labelledby="fungsi-heading">
    <div class="container">

        {{-- Header section --}}
        <div class="section-header">
            <span class="label">Area Operasional</span>
            <h2 id="fungsi-heading">3 Area Operasional Utama PLTP</h2>
            <p>
                Fasilitas operasional dari hulu ke hilir yang mengelola uap panas bumi menjadi energi listrik bersih siap guna.
            </p>
        </div>

        {{-- Grid kartu fungsi --}}
        <div class="fungsi-grid">
            @foreach($fungsi as $item)
                <article class="fungsi-card {{ $item['warna'] }}">
                    <div class="fungsi-card__icon-wrap">
                        <x-ui-icon :name="$item['icon']" />
                    </div>
                    <h3>{{ $item['judul'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     KOMITMEN K3 GEOTHERMAL
     ========================================================== --}}
<section class="manfaat-section section section-alt" id="manfaat" aria-labelledby="manfaat-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Komitmen Keselamatan</span>
            <h2 id="manfaat-heading">Mengapa K3 Geothermal Sangat Krusial?</h2>
            <p>
                Mengelola uap bersuhu ekstrem, gas kimia H2S alami, dan tegangan listrik ekstra tinggi memerlukan standar keselamatan hulu-hilir tanpa celah.
            </p>
        </div>

        <div class="manfaat-grid">
            @foreach($manfaat as $item)
                <article class="manfaat-card">
                    <div class="manfaat-card__icon">
                        <x-ui-icon :name="$item['icon']" />
                    </div>
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
     TIM PENYUSUN MAHASISWA
     ========================================================== --}}
<section class="tim-section section" id="tim" aria-labelledby="tim-heading">
    <div class="container">

        <div class="section-header">
            <span class="label">Tim Mahasiswa</span>
            <h2 id="tim-heading">Tim Penyusun Laporan K3</h2>
            <p>
                Disusun oleh Mahasiswa Program Studi Sistem Informasi Bisnis, Jurusan Teknologi Informasi, Politeknik Negeri Malang.
            </p>
        </div>

        <div class="tim-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: var(--space-lg);">
            @foreach($tim_penyusun as $mhs)
                <div class="tim-card" style="background: var(--putih); padding: var(--space-lg) var(--space-xl); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: center; border-left: 4px solid var(--biru-muda); transition: transform var(--transition); position: relative; overflow: hidden; min-height: 110px;">
                    <div style="position: relative; z-index: 2;">
                        <span class="badge badge-hijau" style="font-size: 0.65rem; padding: 2px 8px; margin-bottom: 6px; display: inline-block;">Penyusun</span>
                        <h4 style="margin: 0; font-size: var(--text-base); color: var(--hitam); font-weight: 600;">{{ $mhs['nama'] }}</h4>
                        <p style="margin: 4px 0 0 0; font-size: var(--text-sm); color: var(--abu-tua);">NIM: {{ $mhs['nim'] }}</p>
                    </div>
                    <div style="position: absolute; right: 16px; bottom: -15px; font-family: var(--font-heading); font-size: 5.5rem; font-weight: 900; color: rgba(16, 185, 129, 0.06); line-height: 1; user-select: none; z-index: 1;">
                        {{ sprintf("%02d", $loop->iteration) }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     CTA BANNER
     ========================================================== --}}
<section class="cta-banner" id="cta" aria-label="Call to Action">
    <div class="container">
        <h2>Siap Mempelajari Identifikasi Bahaya Geothermal?</h2>
        <p>
            Telusuri matriks bahaya, pencegahan kecelakaan kerja di area wellpad, turbin, cooling tower, dan switchyard serta lihat rencana denah keselamatan.
        </p>
        <div class="cta-banner__actions">
            <a href="{{ route('hirarc') }}" class="btn btn-primary" id="cta-mulai">
                <x-ui-icon name="shield" />
                Lihat Identifikasi Bahaya
            </a>
            <a href="{{ route('denah') }}" class="btn btn-secondary" id="cta-denah">
                <x-ui-icon name="map" />
                Lihat Denah Evakuasi
            </a>
        </div>
    </div>
</section>

@endsection
