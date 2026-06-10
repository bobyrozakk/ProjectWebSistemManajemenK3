{{-- ============================================================
    components/footer.blade.php — Komponen Footer
    Di-include oleh layouts/app.blade.php
    ============================================================ --}}

<footer class="footer" role="contentinfo">
    <div class="container">

        {{-- ── Grid 3 Kolom ── --}}
        <div class="footer__grid">

            {{-- Kolom 1: About --}}
            <div class="footer__col">
                <div class="footer__brand">
                    <div class="footer__brand-icon">
                        <x-ui-icon name="zap" />
                    </div>
                    <span class="footer__brand-name" style="font-size: 1.15rem; white-space: nowrap;">PT Barito Renewables<span> Energy Tbk</span></span>
                </div>

                <p class="footer__about-text">
                    Website dokumentasi K3 PT Barito Renewables Energy Tbk (BREN) & Star Energy Geothermal
                    yang dikembangkan sebagai media pembelajaran mata kuliah K3.
                    Semua konten bersifat edukatif dan akademis.
                </p>

                <div class="footer__badges">
                    <span class="footer__badge"><x-ui-icon name="clipboard" /> UU No. 21/2014</span>
                    <span class="footer__badge"><x-ui-icon name="globe" /> Geothermal K3</span>
                    <span class="footer__badge"><x-ui-icon name="shield" /> ISO 45001</span>
                </div>
            </div>

            {{-- Kolom 2: Quick Links --}}
            <div class="footer__col">
                <h3 class="footer__col-title">Navigasi Cepat</h3>
                <nav aria-label="Footer Navigation">
                    <ul class="footer__links">
                        <li>
                            <a href="{{ route('home') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Beranda & Profil PT Barito Renewables Energy Tbk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('regulasi') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Dasar Hukum & Regulasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('hirarc') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Identifikasi Bahaya (HIRARC)
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('denah') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Denah Evakuasi Gedung
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('template') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Pusat Unduhan Template
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- Kolom 3: Informasi Kelompok --}}
            <div class="footer__col">
                <h3 class="footer__col-title">Informasi</h3>

                <div class="footer__contact-item">
                    <x-ui-icon name="building" class="footer__contact-icon" />
                    <div class="footer__contact-text">
                        <strong>Universitas</strong>
                        Politeknik Negeri Malang
                    </div>
                </div>

                <div class="footer__contact-item">
                    <x-ui-icon name="book" class="footer__contact-icon" />
                    <div class="footer__contact-text">
                        <strong>Mata Kuliah</strong>
                        K3 — Keselamatan dan Kesehatan Kerja
                    </div>
                </div>

                <div class="footer__contact-item">
                    <x-ui-icon name="graduation" class="footer__contact-icon" />
                    <div class="footer__contact-text">
                        <strong>Dosen Pembimbing</strong>
                        Titis Octary Satrio
                    </div>
                </div>

                <div class="footer__contact-item">
                    <x-ui-icon name="calendar" class="footer__contact-icon" />
                    <div class="footer__contact-text">
                        <strong>Semester</strong>
                        Genap 2025/2026
                    </div>
                </div>

                <div class="footer__contact-item">
                    <x-ui-icon name="briefcase" class="footer__contact-icon" />
                    <div class="footer__contact-text">
                        <strong>SIB2E</strong>
                        Kelompok 3 (Buildmatch)
                    </div>
                </div>
            </div>

        </div>{{-- /footer__grid --}}
    </div>

    {{-- ── Bottom Bar ── --}}
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-inner">
                <p class="footer__copyright">
                    &copy; {{ date('Y') }} <strong>PT Barito Renewables Energy Tbk</strong> — Dibuat untuk keperluan akademik mata kuliah K3.
                    Data bersifat dummy dan edukatif.
                </p>
                <span class="footer__tagline">
                    "Keselamatan kerja panas bumi demi keberlanjutan energi bersih." — PT Barito Renewables Energy Tbk
                </span>
            </div>
        </div>
    </div>

</footer>
