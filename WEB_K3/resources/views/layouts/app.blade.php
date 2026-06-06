{{-- ============================================================
    layouts/app.blade.php — Master Layout SMK3 Docs
    Semua halaman menggunakan layout ini via @extends
    ============================================================ --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Meta Tags --}}
    <meta name="description" content="@yield('meta_desc', 'Website dokumentasi SMK3 — Sistem Manajemen Keselamatan dan Kesehatan Kerja. Pelajari regulasi, level dokumen, HIRARC, dan template K3.')">
    <meta name="keywords" content="SMK3, K3, Keselamatan Kerja, Kesehatan Kerja, HIRARC, Dokumentasi, PP 50 2012">
    <meta name="author" content="Kelompok K3 — Mata Kuliah K3">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'SMK3 Docs') | Dokumentasi Sistem Manajemen K3">
    <meta property="og:type" content="website">

    <title>@yield('title', 'Beranda') | SMK3 Docs — Dokumentasi K3</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    {{-- CSS Global --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- CSS Halaman Spesifik --}}
    @yield('css')

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
</head>
<body>

    {{-- ═══ Navbar ═══ --}}
    @include('components.navbar')

    {{-- ═══ Konten Utama ═══ --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- ═══ Footer ═══ --}}
    @include('components.footer')

    {{-- ═══ Script Global ═══ --}}
    <script>
        // ── Scroll effect navbar ────────────────────────────────────
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // ── Hamburger menu toggle ───────────────────────────────────
        const hamburger = document.querySelector('.navbar__hamburger');
        const menu      = document.querySelector('.navbar__menu');

        if (hamburger && menu) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('open');
                menu.classList.toggle('open');
                // Accessibility
                const isOpen = menu.classList.contains('open');
                hamburger.setAttribute('aria-expanded', isOpen);
            });

            // Tutup menu saat klik di luar
            document.addEventListener('click', (e) => {
                if (!navbar.contains(e.target)) {
                    hamburger.classList.remove('open');
                    menu.classList.remove('open');
                }
            });

            // Tutup menu saat resize ke desktop
            window.addEventListener('resize', () => {
                if (window.innerWidth > 900) {
                    hamburger.classList.remove('open');
                    menu.classList.remove('open');
                }
            });
        }

        // ── Animasi angka statistik (untuk halaman home) ────────────
        function animateCounters() {
            const counters = document.querySelectorAll('[data-count]');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 1500;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.textContent = Math.round(current);
                }, 16);
            });
        }

        // Jalankan animasi counter saat elemen masuk viewport
        const statsSection = document.querySelector('.stats-grid');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            observer.observe(statsSection);
        }

        // ── Smooth reveal saat scroll ───────────────────────────────
        const revealElements = document.querySelectorAll('.card, .fungsi-card, .manfaat-card, .regulasi-card, .template-card, .hierarki-card, .status-card');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = entry.target.style.transform.replace('translateY(20px)', 'translateY(0)');
                    }, index * 60);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            el.style.transform = (el.style.transform || '') + ' translateY(20px)';
            revealObserver.observe(el);
        });
    </script>

    {{-- Script halaman spesifik --}}
    @yield('scripts')

</body>
</html>
