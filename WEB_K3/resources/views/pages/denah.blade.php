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
                <div class="blueprint-grid l1-grid">
                    {{-- Workshop Perawatan --}}
                    <div class="blueprint-room room-workshop">
                        <span class="room-title">Workshop Perawatan</span>
                        <div class="room-icons">
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                            <span class="safety-icon p3k" title="Kotak P3K"><x-ui-icon name="check-circle" /></span>
                        </div>
                    </div>
                    {{-- Gudang Bahan Baku --}}
                    <div class="blueprint-room room-gudang">
                        <span class="room-title">Gudang Bahan Baku</span>
                        <div class="room-icons">
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                            <span class="safety-icon hidran" title="Hidran"><x-ui-icon name="alert-triangle" /></span>
                        </div>
                    </div>
                    {{-- Ruang Kontrol Lantai --}}
                    <div class="blueprint-room room-kontrol">
                        <span class="room-title">Ruang Kontrol Lantai</span>
                        <div class="room-icons">
                            <span class="safety-icon p3k" title="Kotak P3K"><x-ui-icon name="check-circle" /></span>
                            <span class="safety-icon pin" title="Lokasi Sekarang"><x-ui-icon name="map" /></span>
                        </div>
                    </div>
                    {{-- Toilet --}}
                    <div class="blueprint-room room-toilet">
                        <span class="room-title">Toilet</span>
                    </div>
                    {{-- Area Produksi Utama --}}
                    <div class="blueprint-room room-produksi">
                        <span class="room-title">Area Turbin & Generator</span>
                        <div class="room-icons">
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                            <span class="safety-icon hidran" title="Hidran"><x-ui-icon name="alert-triangle" /></span>
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                        </div>
                    </div>
                    {{-- Musholla --}}
                    <div class="blueprint-room room-musholla">
                        <span class="room-title">Musholla</span>
                    </div>

                    {{-- Jalur Koridor Tengah & Panah Evakuasi --}}
                    <div class="blueprint-hallway">
                        <div class="evac-route horizontal">
                            <span class="arrow-left">◀◀</span> Jalur Evakuasi Utama <span class="arrow-left">◀◀</span>
                        </div>
                        <div class="evac-exit" title="Pintu Keluar Utama">EXIT</div>
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
                <div class="blueprint-grid l2-grid">
                    {{-- Ruang Server --}}
                    <div class="blueprint-room room-server">
                        <span class="room-title">Ruang Server & IT</span>
                        <div class="room-icons">
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                        </div>
                    </div>
                    {{-- QC Lab --}}
                    <div class="blueprint-room room-qclab">
                        <span class="room-title">Laboratorium QC</span>
                        <div class="room-icons">
                            <span class="safety-icon p3k" title="Kotak P3K"><x-ui-icon name="check-circle" /></span>
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                        </div>
                    </div>
                    {{-- Ruang Rapat --}}
                    <div class="blueprint-room room-rapat">
                        <span class="room-title">Ruang Rapat</span>
                        <div class="room-icons">
                            <span class="safety-icon p3k" title="Kotak P3K"><x-ui-icon name="check-circle" /></span>
                        </div>
                    </div>
                    {{-- Kantor Staf Teknis --}}
                    <div class="blueprint-room room-staf">
                        <span class="room-title">Kantor Staf Teknis</span>
                        <div class="room-icons">
                            <span class="safety-icon pin" title="Lokasi Sekarang"><x-ui-icon name="map" /></span>
                        </div>
                    </div>
                    {{-- Void / Area Jatuh --}}
                    <div class="blueprint-room room-void" style="background: repeating-linear-gradient(45deg, rgba(239,68,68,0.1), rgba(239,68,68,0.1) 10px, rgba(239,68,68,0.2) 10px, rgba(239,68,68,0.2) 20px); border: 2px dashed #ef4444;">
                        <span class="room-title" style="color: #ef4444; font-weight:700;">⚠ Void / Area Jatuh Potensial</span>
                    </div>
                    {{-- Kantor Manajemen --}}
                    <div class="blueprint-room room-manajemen">
                        <span class="room-title">Kantor Manajemen</span>
                        <div class="room-icons">
                            <span class="safety-icon apar" title="APAR"><x-ui-icon name="shield" /></span>
                        </div>
                    </div>
                    {{-- Ruang Administrasi --}}
                    <div class="blueprint-room room-administrasi">
                        <span class="room-title">Ruang Administrasi</span>
                    </div>

                    {{-- Tangga Darurat --}}
                    <div class="blueprint-room room-tangga">
                        <span class="room-title" style="color: var(--hijau); font-weight: 700;">TANGGA DARURAT</span>
                        <span class="safety-icon" style="color: var(--hijau); font-size: 24px; margin-top:5px;"><x-ui-icon name="globe" /></span>
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
</script>
@endsection
