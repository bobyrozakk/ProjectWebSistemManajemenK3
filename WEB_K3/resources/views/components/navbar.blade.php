{{-- ============================================================
    components/navbar.blade.php — Komponen Navigasi
    Di-include oleh layouts/app.blade.php
    ============================================================ --}}

{{-- Helper: cek halaman aktif --}}
@php
    $currentRoute = Route::currentRouteName();
    $navLinks = [
        ['route' => 'home',         'label' => 'Beranda',       'icon' => 'home'],
        ['route' => 'regulasi',     'label' => 'Regulasi',      'icon' => 'scale'],
        ['route' => 'tingkatan',    'label' => 'Tingkatan',     'icon' => 'layers'],
        ['route' => 'flowchart',    'label' => 'Flowchart',     'icon' => 'workflow'],
        ['route' => 'pengendalian', 'label' => 'Pengendalian',  'icon' => 'folder'],
        ['route' => 'hirarc',       'label' => 'HIRARC',        'icon' => 'shield'],
        ['route' => 'template',     'label' => 'Template',      'icon' => 'download'],
    ];
@endphp

<nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi Utama">
    <div class="container navbar__inner">

        {{-- ── Logo ── --}}
        <a href="{{ route('home') }}" class="navbar__logo" aria-label="SMK3 Docs - Beranda">
            <div class="navbar__logo-icon">
                <x-ui-icon name="hard-hat" />
            </div>
            <span class="navbar__logo-text">SMK3<span> Docs</span></span>
        </a>

        {{-- ── Menu Navigasi ── --}}
        <ul class="navbar__menu" id="navbar-menu" role="menubar">
            @foreach($navLinks as $link)
                @if($link['route'] !== 'template')
                    <li role="none">
                        <a href="{{ route($link['route']) }}"
                           class="navbar__link {{ $currentRoute === $link['route'] ? 'active' : '' }}"
                           role="menuitem"
                           aria-current="{{ $currentRoute === $link['route'] ? 'page' : 'false' }}">
                            <x-ui-icon :name="$link['icon']" class="link-icon" />
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endif
            @endforeach

            {{-- Template sebagai CTA --}}
            <li role="none">
                <a href="{{ route('template') }}"
                   class="navbar__link navbar__cta {{ $currentRoute === 'template' ? 'active' : '' }}"
                   role="menuitem"
                   id="nav-template-cta">
                    <x-ui-icon name="download" class="link-icon" />
                    Template
                </a>
            </li>
        </ul>

        {{-- ── Hamburger (Mobile) ── --}}
        <button class="navbar__hamburger"
                id="hamburger-btn"
                aria-label="Buka/Tutup Menu"
                aria-expanded="false"
                aria-controls="navbar-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</nav>
