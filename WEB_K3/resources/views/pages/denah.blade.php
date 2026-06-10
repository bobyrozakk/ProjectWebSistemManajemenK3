{{-- ============================================================
    pages/denah.blade.php — Halaman Denah Evakuasi K3 BREN
    Data diterima dari SmkController@denah
    ============================================================ --}}

@extends('layouts.app')

@section('title', 'Denah Evakuasi & Keselamatan')
@section('meta_desc', 'Lihat peta denah keselamatan Lantai 1 & Lantai 2 PT Barito Renewables Energy Tbk (BREN). Rute evakuasi, letak APAR, P3K, dan titik kumpul.')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/denah.css') }}?v=1.5">
@endsection

@section('content')

{{-- ── Hero Mini ─────────────────────────────────────────────── --}}
<header class="hero-mini" id="page-hero" aria-label="Header Halaman">
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}"><x-ui-icon name="home" /> Beranda</a>
            <span>›</span>
            <span class="current" aria-current="page">Denah Evakuasi & Keselamatan</span>
        </nav>
        <h1><x-ui-icon name="map" /> Denah Evakuasi & Keselamatan</h1>
        <p>Peta jalur penyelamatan, fasilitas P3K, APAR, dan pintu evakuasi darurat di gedung PLTP</p>
    </div>
</header>

{{-- Legenda & Keterangan Simbol --}}
<section class="section" id="legenda-simbol" aria-labelledby="legenda-heading">
    <div class="container">
        <div class="section-header">
            <span class="label">Simbol Keselamatan</span>
            <h2 id="legenda-heading">Legenda Simbol Keselamatan</h2>
            <p>Pahami arti simbol keselamatan berikut yang tertera pada papan denah fisik gedung.</p>
        </div>

        <div class="legenda-grid">
            @foreach($simbol as $s)
                <div class="legenda-item">
                    <div class="legenda-icon-wrap {{ $s['warna'] }}">
                        <x-ui-icon :name="$s['icon']" />
                    </div>
                    <div class="legenda-text">
                        <h4>{{ $s['nama'] }}</h4>
                        <p>{{ $s['deskripsi'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Halaman Denah Interaktif --}}
<section class="section section-alt" id="peta-denah" aria-labelledby="denah-heading">
    <div class="container">
        <div class="section-header">
            <span class="label">Peta Gedung PLTP</span>
            <h2 id="denah-heading">Denah Tata Letak & Evakuasi Darurat</h2>
            <p>Pilih lantai untuk melihat visualisasi blueprint tata ruang, rute evakuasi, dan fasilitas keselamatan.</p>
        </div>

        {{-- Switcher Lantai --}}
        <div class="tab-container">
            <button class="tab-btn active" data-floor="floor1">
                <x-ui-icon name="layers" /> {{ $lantai1['nama'] }}
            </button>
            <button class="tab-btn" data-floor="floor2">
                <x-ui-icon name="layers" /> {{ $lantai2['nama'] }}
            </button>
        </div>

        {{-- Box Denah Visual --}}
        <div class="denah-interactive-box">
            {{-- Denah Lantai 1 --}}
            <div class="floor-layout active" id="floor1-layout">
                <div class="map-container">
                    <div class="map-wrapper" onclick="openLightbox('{{ asset('images/denah-lantai-1.png') }}', 'Lantai 1')">
                        <img src="{{ asset('images/denah-lantai-1.png') }}" alt="Denah Tata Letak & Evakuasi Darurat Lantai 1" class="map-image">
                        <div class="map-overlay">
                            <span class="zoom-text"><x-ui-icon name="search" /> Klik untuk memperbesar</span>
                        </div>
                    </div>
                    <div class="map-actions">
                        <a href="{{ asset('images/denah-lantai-1.png') }}" download="Denah-Evakuasi-Lantai-1.png" class="btn-map-download">
                            <x-ui-icon name="download" /> Unduh Peta Lantai 1
                        </a>
                    </div>
                </div>

                {{-- Prosedur Panel --}}
                <div class="prosedur-panel">
                    <div class="prosedur-text">
                        <h3>Prosedur Evakuasi Lantai 1:</h3>
                        <p>{{ $lantai1['prosedur'] }}</p>
                        <div style="margin-top: 10px; font-weight: 600; color: var(--biru-tua);">
                            Fasilitas: @foreach($lantai1['ruangan'] as $ruang) <span class="badge badge-biru">{{ $ruang }}</span> @endforeach
                        </div>
                    </div>
                    <div class="assembly-card">
                        <x-ui-icon name="globe" class="assembly-icon" />
                        <div>
                            <h4>Assembly Point</h4>
                            <p>Area Parkir Barat</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Denah Lantai 2 --}}
            <div class="floor-layout" id="floor2-layout">
                <div class="map-container">
                    <div class="map-wrapper" onclick="openLightbox('{{ asset('images/denah-lantai-2.png') }}', 'Lantai 2')">
                        <img src="{{ asset('images/denah-lantai-2.png') }}" alt="Denah Tata Letak & Evakuasi Darurat Lantai 2" class="map-image">
                        <div class="map-overlay">
                            <span class="zoom-text"><x-ui-icon name="search" /> Klik untuk memperbesar</span>
                        </div>
                    </div>
                    <div class="map-actions">
                        <a href="{{ asset('images/denah-lantai-2.png') }}" download="Denah-Evakuasi-Lantai-2.png" class="btn-map-download">
                            <x-ui-icon name="download" /> Unduh Peta Lantai 2
                        </a>
                    </div>
                </div>

                {{-- Prosedur Panel --}}
                <div class="prosedur-panel">
                    <div class="prosedur-text">
                        <h3>Prosedur Evakuasi Lantai 2:</h3>
                        <p>{{ $lantai2['prosedur'] }}</p>
                        <div style="margin-top: 10px; font-weight: 600; color: #ef4444;">
                            Perhatian: {{ $lantai2['bahaya'] }}
                        </div>
                        <div style="margin-top: 10px; font-weight: 600; color: var(--biru-tua);">
                            Fasilitas: @foreach($lantai2['ruangan'] as $ruang) <span class="badge badge-biru">{{ $ruang }}</span> @endforeach
                        </div>
                    </div>
                    <div class="assembly-card warning">
                        <x-ui-icon name="alert-triangle" class="assembly-icon" />
                        <div>
                            <h4>Peringatan Void</h4>
                            <p>Bahaya Jatuh Fisik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Lightbox Modal ── --}}
<div id="map-lightbox" class="lightbox-modal" onclick="closeLightbox(event)" aria-hidden="true" role="dialog">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <div class="lightbox-content-wrap">
        <h3 id="lightbox-title"></h3>
        <img class="lightbox-img" id="lightbox-img" src="" alt="Detail Denah">
    </div>
</div>

@endsection

@section('scripts')
<script>
    // ── Tab Switcher Lantai ──────────────────────────────────────────
    const tabButtons = document.querySelectorAll('.tab-btn');
    const floorLayouts = document.querySelectorAll('.floor-layout');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Hapus kelas aktif dari semua tombol
            tabButtons.forEach(b => b.classList.remove('active'));
            // Tambahkan kelas aktif ke tombol yang diklik
            btn.classList.add('active');

            const floor = btn.getAttribute('data-floor');

            floorLayouts.forEach(layout => {
                if (layout.id === `${floor}-layout`) {
                    layout.classList.add('active');
                } else {
                    layout.classList.remove('active');
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
        lightboxTitle.innerText = `Denah Evakuasi & Keselamatan — ${title}`;
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
