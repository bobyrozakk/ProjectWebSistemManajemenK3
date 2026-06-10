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
     GALERI VIDEO K3 GEOTHERMAL
     ========================================================== --}}
<section class="video-gallery section" id="edukasi-video" aria-labelledby="video-heading">
    <div class="container">

        {{-- Header section --}}
        <div class="section-header">
            <span class="label">Edukasi Video K3</span>
            <h2 id="video-heading">Pengelolaan Risiko Gas H2S Panas Bumi</h2>
            <p>
                Simak video penjelasan mengenai pentingnya mitigasi bahaya gas hidrogen sulfida (H2S) pada aktivitas bleed off sumur panas bumi Dieng.
            </p>
        </div>

        {{-- Single Video Player Container --}}
        <div class="video-gallery__single-container">
            <div class="video-gallery__player">
                {{-- Placeholder Player (karena video dibatasi embedding) --}}
                <div class="video-gallery__placeholder-cover" style="display: flex;">
                    <div class="placeholder-bg" style="background-image: url('https://img.youtube.com/vi/-hNQ4RKd5uM/maxresdefault.jpg');"></div>
                    <div class="placeholder-content">
                        <div class="placeholder-icon-wrap">
                            <x-ui-icon name="alert-triangle" class="placeholder-icon" />
                        </div>
                        <h3 class="placeholder-title">Pengelolaan Risiko Gas H2S (SIGAP) - Dieng</h3>
                        <p class="placeholder-desc">
                            Video ini dilindungi oleh pemiliknya dan hanya dapat diputar langsung di platform YouTube. Silakan klik tombol di bawah untuk menyaksikan.
                        </p>
                        <a href="https://www.youtube.com/watch?v=-hNQ4RKd5uM" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-watch-yt">
                            <x-ui-icon name="globe" />
                            Tonton di YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     STRUKTUR ORGANISASI K3
     ========================================================== --}}
<section class="org-section section" id="organisasi" aria-labelledby="org-heading">
    <div class="container">
        <div class="section-header">
            <span class="label">Struktur Organisasi</span>
            <h2 id="org-heading">Struktur Organisasi Tanggap Darurat & Keselamatan</h2>
            <p>
                Alur pertanggungjawaban komando operasional serta kepatuhan K3 hulu-hilir PT Barito Renewables Energy Tbk.
            </p>
        </div>

        <div class="tab-container" style="margin-bottom: var(--space-xl);">
            <button class="tab-btn active" data-view="interactive-tree">
                <x-ui-icon name="workflow" /> Bagan Interaktif
            </button>
            <button class="tab-btn" data-view="image-chart">
                <x-ui-icon name="chart" /> Bagan Gambar Resmi
            </button>
        </div>

        <div class="org-view-box">
            <!-- 1. Interactive CSS Tree -->
            <div class="org-view-content active" id="interactive-tree-view">
                <div class="tree-layout">
                    <!-- Level 1: Direktur Utama -->
                    <div class="tree-node root-node">
                        <div class="node-card root-card">
                            <x-ui-icon name="user" class="node-icon" />
                            <div class="node-details">
                                <h3>Direktur Utama</h3>
                                <p>Pimpinan Tertinggi & Penanggung Jawab Kebijakan K3</p>
                            </div>
                        </div>
                    </div>

                    <!-- Level 2 & 3: Managers & Divisions -->
                    <div class="tree-branches">
                        <!-- Branch 1 -->
                        <div class="tree-branch">
                            <div class="node-card manager-card">
                                <x-ui-icon name="briefcase" class="node-icon" />
                                <div class="node-details">
                                    <h3>Manajer Operasi Geothermal</h3>
                                    <p>Operasi Pembangkit & Sumur</p>
                                </div>
                            </div>
                            <div class="node-children">
                                <div class="child-card"><x-ui-icon name="zap" class="child-icon" /> Divisi Produksi Listrik</div>
                                <div class="child-card"><x-ui-icon name="settings" class="child-icon" /> Divisi Wellpad dan Pengeboran</div>
                                <div class="child-card"><x-ui-icon name="workflow" class="child-icon" /> Divisi Steam Gathering System</div>
                            </div>
                        </div>

                        <!-- Branch 2 -->
                        <div class="tree-branch">
                            <div class="node-card manager-card">
                                <x-ui-icon name="settings" class="node-icon" />
                                <div class="node-details">
                                    <h3>Manajer Teknik & Pemeliharaan</h3>
                                    <p>Pemeliharaan Aset & Fasilitas</p>
                                </div>
                            </div>
                            <div class="node-children">
                                <div class="child-card"><x-ui-icon name="factory" class="child-icon" /> Divisi Pemeliharaan PLTP</div>
                                <div class="child-card"><x-ui-icon name="zap" class="child-icon" /> Divisi Instrumentasi dan Kelistrikan</div>
                            </div>
                        </div>

                        <!-- Branch 3 -->
                        <div class="tree-branch">
                            <div class="node-card manager-card">
                                <x-ui-icon name="users" class="node-icon" />
                                <div class="node-details">
                                    <h3>Manajer Administrasi & Umum</h3>
                                    <p>SDM & Layanan Administrasi</p>
                                </div>
                            </div>
                            <div class="node-children">
                                <div class="child-card"><x-ui-icon name="folder" class="child-icon" /> Divisi SDM dan Administrasi</div>
                            </div>
                        </div>

                        <!-- Branch 4 -->
                        <div class="tree-branch">
                            <div class="node-card manager-card">
                                <x-ui-icon name="globe" class="node-icon" />
                                <div class="node-details">
                                    <h3>Manajer Lingkungan & Keberlanjutan</h3>
                                    <p>EBTKE & Pengelolaan Limbah</p>
                                </div>
                            </div>
                            <div class="node-children">
                                <div class="child-card"><x-ui-icon name="box" class="child-icon" /> Divisi Pengelolaan Limbah</div>
                                <div class="child-card"><x-ui-icon name="clipboard" class="child-icon" /> Pelatihan dan Kepatuhan K3</div>
                            </div>
                        </div>

                        <!-- Branch 5 -->
                        <div class="tree-branch">
                            <div class="node-card coordinator-card">
                                <x-ui-icon name="shield" class="node-icon" />
                                <div class="node-details">
                                    <h3>Koordinator K3</h3>
                                    <p>Pengawasan & Kepatuhan SMK3</p>
                                </div>
                            </div>
                            <div class="node-children">
                                <div class="child-card"><x-ui-icon name="monitor" class="child-icon" /> Pengawasan Keselamatan Kerja</div>
                                <div class="child-card"><x-ui-icon name="clipboard" class="child-icon" /> Pelatihan dan Kepatuhan K3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Image Chart View -->
            <div class="org-view-content" id="image-chart-view">
                <div class="map-container">
                    <div class="map-wrapper" onclick="openLightbox('{{ asset('images/struktur-organisasi.png') }}', 'Struktur Organisasi')">
                        <img src="{{ asset('images/struktur-organisasi.png') }}" alt="Struktur Organisasi PT Barito Renewables Energy Tbk" class="map-image" style="max-height: 650px;">
                        <div class="map-overlay">
                            <span class="zoom-text"><x-ui-icon name="search" /> Klik untuk memperbesar</span>
                        </div>
                    </div>
                    <div class="map-actions">
                        <a href="{{ asset('images/struktur-organisasi.png') }}" download="Struktur-Organisasi-BREN.png" class="btn-map-download">
                            <x-ui-icon name="download" /> Unduh Gambar Struktur
                        </a>
                    </div>
                </div>
            </div>
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

{{-- ── Lightbox Modal ── --}}
<div id="map-lightbox" class="lightbox-modal" onclick="closeLightbox(event)" aria-hidden="true" role="dialog">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <div class="lightbox-content-wrap">
        <h3 id="lightbox-title"></h3>
        <img class="lightbox-img" id="lightbox-img" src="" alt="Detail Bagan">
    </div>
</div>

@endsection

@section('scripts')
<script>
    // ── View Switcher Bagan ──────────────────────────────────────────
    const viewButtons = document.querySelectorAll('.tab-btn');
    const viewContents = document.querySelectorAll('.org-view-content');

    viewButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            viewButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const view = btn.getAttribute('data-view');

            viewContents.forEach(content => {
                if (content.id === `${view}-view`) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        });
    });

    // ── Lightbox Modal Functions ──
    const lightbox = document.getElementById('map-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');

    function openLightbox(src, title) {
        if (!lightbox || !lightboxImg || !lightboxTitle) return;
        lightboxImg.src = src;
        lightboxTitle.innerText = `Bagan Resmi — ${title}`;
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox(e) {
        if (!e || e.target === lightbox || e.target.classList.contains('lightbox-close') || e.target.classList.contains('lightbox-content-wrap')) {
            lightbox.classList.remove('open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }
</script>
@endsection
