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
                        <x-ui-icon name="hard-hat" />
                    </div>
                    <span class="footer__brand-name">SMK3<span> Docs</span></span>
                </div>

                <p class="footer__about-text">
                    Website dokumentasi Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3)
                    yang dikembangkan sebagai media pembelajaran untuk mata kuliah K3.
                    Semua konten bersifat edukatif dan akademis.
                </p>

                <div class="footer__badges">
                    <span class="footer__badge"><x-ui-icon name="clipboard" /> PP No. 50/2012</span>
                    <span class="footer__badge"><x-ui-icon name="globe" /> OHSAS 18001</span>
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
                                Beranda & Pengantar
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('regulasi') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Dasar Hukum & Regulasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tingkatan') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Level Dokumen SMK3
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('flowchart') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Panduan Diagram Alir
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pengendalian') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Pengendalian Dokumen
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('hirarc') }}" class="footer__link">
                                <span class="link-dot"></span>
                                Manajemen Risiko HIRARC
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
                    &copy; {{ date('Y') }} <strong>SMK3 Docs</strong> — Dibuat untuk keperluan akademik mata kuliah K3.
                    Data bersifat dummy dan edukatif.
                </p>
                <span class="footer__tagline">
                    "Keselamatan bukan pilihan, melainkan kewajiban." — PP No. 50/2012
                </span>
            </div>
        </div>
    </div>

</footer>
