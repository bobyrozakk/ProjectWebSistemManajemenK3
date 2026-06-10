<?php

/**
 * SmkController.php
 * Controller utama untuk website Dokumentasi K3 PT Barito Renewables Energy Tbk (BREN)
 * Semua data bersifat dummy (hardcoded) — tanpa database
 */

namespace App\Http\Controllers;

class SmkController extends Controller
{
    /**
     * Halaman Beranda — Profil & Visi Misi K3 PT Barito Renewables Energy Tbk
     */
    public function home()
    {
        // Data area operasional panas bumi BREN
        $fungsi = [
            [
                'icon' => 'briefcase',
                'judul' => 'Area Wellpad (Sumur Panas Bumi)',
                'deskripsi' => 'Fasilitas pengeboran sumur panas bumi dan jaringan pipa transmisi uap suhu tinggi (steam gathering system) dari dalam perut bumi.',
                'warna' => 'biru',
            ],
            [
                'icon' => 'factory',
                'judul' => 'Ruang Turbin & Generator',
                'deskripsi' => 'Pusat konversi (power plant) yang memutar turbin menggunakan uap panas bumi untuk menghasilkan energi listrik berdaya besar.',
                'warna' => 'emas',
            ],
            [
                'icon' => 'shield',
                'judul' => 'Gardu Induk (Switchyard)',
                'deskripsi' => 'Fasilitas kelistrikan tegangan ekstra tinggi untuk menyalurkan energi listrik bersih ke sistem transmisi nasional.',
                'warna' => 'hijau',
            ],
        ];

        // Komitmen K3 BREN
        $manfaat = [
            [
                'icon' => 'check-circle',
                'judul' => 'Zero Accident Commitment',
                'deskripsi' => 'Mencegah terjadinya kecelakaan fatal melalui penerapan standar keselamatan internasional.',
            ],
            [
                'icon' => 'radio',
                'judul' => 'H2S Gas Monitoring',
                'deskripsi' => 'Sistem deteksi dini gas Hidrogen Sulfida beracun secara real-time demi melindungi seluruh pekerja.',
            ],
            [
                'icon' => 'zap',
                'judul' => 'Electrical Safety Standard',
                'deskripsi' => 'Pengamanan isolasi berlapis dan Lockout/Tagout (LOTO) pada instalasi pembangkit tegangan tinggi.',
            ],
            [
                'icon' => 'award',
                'judul' => 'Sertifikasi & Kepatuhan',
                'deskripsi' => 'Penerapan standar SMK3 PP 50/2012 dan ISO 45001 secara hulu-hilir demi operasional ramah lingkungan.',
            ],
        ];

        // Data statistik operasional PLTP BREN / Star Energy
        $statistik = [
            ['angka' => '377', 'label' => 'Kapasitas PLTP Salak (MW)',  'icon' => 'zap'],
            ['angka' => '227', 'label' => 'Kapasitas PLTP W. Windu (MW)', 'icon' => 'zap'],
            ['angka' => '271', 'label' => 'Kapasitas PLTP Darajat (MW)', 'icon' => 'zap'],
            ['angka' => '875', 'label' => 'Total Kapasitas PT Barito Renewables Energy Tbk (MW)', 'icon' => 'factory'],
            ['angka' => '0',   'label' => 'Target Kecelakaan Kerja',     'icon' => 'shield'],
        ];

        // Anggota Tim Mahasiswa Penyusun
        $tim_penyusun = [
            ['nama' => 'Adinda Luluk Hanifah', 'nim' => '244107060137'],
            ['nama' => 'Boby Rozak Saputra',   'nim' => '2341760162'],
            ['nama' => 'Justin Fadly Laiya',   'nim' => '244107060142'],
            ['nama' => 'Rifat Djibran',         'nim' => '244107060138'],
            ['nama' => 'Rifqi Hilmi Mubarok',   'nim' => '244107060110'],
            ['nama' => 'Sharon Avrilunnajwa S', 'nim' => '244107060017'],
        ];

        return view('pages.home', compact('fungsi', 'manfaat', 'statistik', 'tim_penyusun'));
    }

    /**
     * Halaman Regulasi — Dasar Hukum & Regulasi K3 & Panas Bumi
     */
    public function regulasi()
    {
        // Perbandingan Keselamatan Panas Bumi vs K3 Umum
        $perbandingan = [
            [
                'aspek' => 'Fokus Utama',
                'ohsas' => 'Keselamatan operasi instalasi, sumur panas bumi, dan kepala sumur (wellhead)',
                'pp50' => 'Sistem manajemen keselamatan pekerja, administrasi, dan kebijakan K3 organisasi',
            ],
            [
                'aspek' => 'Regulasi Kunci',
                'ohsas' => 'UU No. 21/2014 & Permen ESDM No. 38/2017',
                'pp50' => 'UU No. 1/1970 & PP No. 50/2012',
            ],
            [
                'aspek' => 'Bahaya Kimia Spesifik',
                'ohsas' => 'Konsentrasi gas beracun alami Hidrogen Sulfida (H2S)',
                'pp50' => 'Debu, kebisingan umum, faktor fisika & kimia umum industri',
            ],
            [
                'aspek' => 'Instansi Pengawas',
                'ohsas' => 'Kementerian ESDM (Direktorat Jenderal EBTKE)',
                'pp50' => 'Kementerian Ketenagakerjaan (Disnaker)',
            ],
            [
                'aspek' => 'Sertifikasi Khusus',
                'ohsas' => 'Sertifikat Kelayakan Kerja Peralatan (SKKP) panas bumi',
                'pp50' => 'Sertifikasi SMK3 tingkat perusahaan oleh Lembaga Audit',
            ],
        ];

        // Regulasi nasional Indonesia untuk panas bumi & K3
        $regulasi_nasional = [
            [
                'kode' => 'UU No. 1/1970',
                'judul' => 'Keselamatan Kerja',
                'isi' => 'Landasan utama hukum K3 di Indonesia yang mengatur syarat keselamatan di semua tempat kerja darat, laut, maupun udara.',
                'kategori' => 'Undang-Undang',
                'warna' => 'biru',
            ],
            [
                'kode' => 'UU No. 21/2014',
                'judul' => 'Panas Bumi',
                'isi' => 'Mengatur tentang pemanfaatan panas bumi dari hulu ke hilir, termasuk kewajiban menjaga standar keselamatan operasi dan pengelolaan lingkungan hidup.',
                'kategori' => 'Undang-Undang',
                'warna' => 'emas',
            ],
            [
                'kode' => 'PP No. 50/2012',
                'judul' => 'Penerapan SMK3',
                'isi' => 'Peraturan pemerintah yang mewajibkan perusahaan dengan 100+ pekerja atau tingkat risiko tinggi untuk menerapkan sistem manajemen K3.',
                'kategori' => 'Peraturan Pemerintah',
                'warna' => 'merah',
            ],
            [
                'kode' => 'Permenaker 12/2015',
                'judul' => 'K3 Listrik di Tempat Kerja',
                'isi' => 'Mengatur persyaratan K3 dalam perencanaan, pemasangan, penggunaan, dan pemeliharaan instalasi listrik, sangat relevan untuk area gardu listrik (switchyard).',
                'kategori' => 'Permenaker',
                'warna' => 'hijau',
            ],
            [
                'kode' => 'Permenaker 5/2018',
                'judul' => 'K3 Lingkungan Kerja',
                'isi' => 'Mengatur Nilai Ambang Batas (NAB) faktor fisika, kimia, biologi, ergonomi, dan psikologi. Menjadi acuan batas aman paparan gas H2S beracun (maks. 1 ppm).',
                'kategori' => 'Permenaker',
                'warna' => 'ungu',
            ],
            [
                'kode' => 'Permen ESDM 38/2017',
                'judul' => 'Pemeriksaan Keselamatan Panas Bumi',
                'isi' => 'Mengatur kelayakan keselamatan instalasi, peralatan pengeboran, dan kepala sumur pada kegiatan usaha panas bumi.',
                'kategori' => 'Permen ESDM',
                'warna' => 'merah',
            ],
        ];

        // Timeline riwayat regulasi K3 panas bumi di Indonesia
        $timeline = [
            ['tahun' => '1970', 'peristiwa' => 'UU No. 1/1970 tentang Keselamatan Kerja disahkan sebagai tonggak awal regulasi keselamatan nasional.'],
            ['tahun' => '2012', 'peristiwa' => 'PP No. 50/2012 diterbitkan, mewajibkan sertifikasi SMK3 nasional bagi industri risiko tinggi.'],
            ['tahun' => '2014', 'peristiwa' => 'UU No. 21/2014 tentang Panas Bumi disahkan, menegaskan aturan keselamatan hulu-hilir energi geothermal.'],
            ['tahun' => '2015', 'peristiwa' => 'Permenaker No. 12/2015 mengatur K3 instalasi listrik guna mencegah bahaya sengatan listrik di pembangkit.'],
            ['tahun' => '2017', 'peristiwa' => 'Permen ESDM No. 38/2017 dirilis khusus untuk mengatur standarisasi kelayakan instalasi sumur panas bumi.'],
            ['tahun' => '2018', 'peristiwa' => 'Permenaker No. 5/2018 memperketat batas aman paparan gas H2S di lingkungan kerja menjadi maksimal 1 ppm.'],
            ['tahun' => '2026', 'peristiwa' => 'Komitmen terintegrasi PT Barito Renewables Energy dalam pencapaian Zero Accident secara berkelanjutan.'],
        ];

        return view('pages.regulasi', compact('perbandingan', 'regulasi_nasional', 'timeline'));
    }

    /**
     * Halaman HIRARC — Identifikasi Bahaya & Manajemen Risiko PT Barito Renewables Energy Tbk
     */
    public function hirarc()
    {
        // Hierarki pengendalian risiko
        $hierarki = [
            [
                'level' => 1,
                'nama' => 'Eliminasi',
                'icon' => 'alert-triangle',
                'warna' => '#064e3b',
                'lebar_persen' => 100,
                'deskripsi' => 'Menghilangkan bahaya secara permanen dari tempat kerja. Merupakan metode paling efektif.',
                'contoh' => 'Menghentikan proses kerja berbahaya secara total atau menutup sumur bocor secara permanen.',
                'efektivitas' => 'Sangat Tinggi',
            ],
            [
                'level' => 2,
                'nama' => 'Substitusi',
                'icon' => 'workflow',
                'warna' => '#0f766e',
                'lebar_persen' => 82,
                'deskripsi' => 'Mengganti alat, bahan, atau proses yang berbahaya dengan yang lebih aman.',
                'contoh' => 'Mengganti katup manual dengan katup otomatis berpelindung ganda guna meminimalisir kontak manusia.',
                'efektivitas' => 'Tinggi',
            ],
            [
                'level' => 3,
                'nama' => 'Rekayasa (Engineering)',
                'icon' => 'settings',
                'warna' => '#f97316',
                'lebar_persen' => 64,
                'deskripsi' => 'Melakukan modifikasi fisik pada lingkungan kerja atau peralatan untuk mereduksi bahaya.',
                'contoh' => 'Pemasangan detektor gas H2S statis, mesin peredam bising turbin (enclosure), dan machine guarding.',
                'efektivitas' => 'Menengah-Tinggi',
            ],
            [
                'level' => 4,
                'nama' => 'Administrasi',
                'icon' => 'clipboard',
                'warna' => '#7c3aed',
                'lebar_persen' => 46,
                'deskripsi' => 'Mengubah prosedur kerja, memberikan pelatihan, memasang rambu, dan membatasi waktu kerja.',
                'contoh' => 'SOP evakuasi gas H2S, sistem LOTO (Lockout/Tagout), dan izin kerja khusus kelistrikan (Work Permit).',
                'efektivitas' => 'Menengah',
            ],
            [
                'level' => 5,
                'nama' => 'APD (Alat Pelindung Diri)',
                'icon' => 'hard-hat',
                'warna' => '#ef4444',
                'lebar_persen' => 28,
                'deskripsi' => 'Melindungi pekerja secara langsung dengan alat pelindung. Upaya terakhir setelah metode lain.',
                'contoh' => 'Detektor H2S personal, SCBA, kacamata safety, helm kelas E, sarung tangan dielektrik, body harness.',
                'efektivitas' => 'Rendah (Pilihan Terakhir)',
            ],
        ];

        // Tabel HIRARC Geothermal BREN (4 lokasi utama)
        $tabel_hirarc = [
            [
                'no' => 1,
                'aktivitas' => 'Area Wellpad (Sumur Panas Bumi)',
                'bahaya' => '1. Gas Hidrogen Sulfida (H2S) bocor alami.'."\n".'2. Pipa uap panas bumi bocor/korosi.',
                'risiko' => 'Keracunan gas H2S fatal (kematian), luka bakar akibat uap suhu tinggi.',
                'level' => 'SANGAT TINGGI',
                'warna_level' => 'merah-tua',
                'pengendalian' => 'Pemasangan detektor H2S statis, cek ketebalan pipa berkala (NDT), wind sock, H2S personal monitor, SCBA, coverall tahan panas, safety shoes & helm.',
            ],
            [
                'no' => 2,
                'aktivitas' => 'Ruang Turbin & Generator (Power House)',
                'bahaya' => '1. Komponen mekanik turbin berputar cepat.'."\n".'2. Suara bising mesin melebihi 85 dBA.',
                'risiko' => 'Anggota tubuh terjepit/tergulung, penurunan pendengaran permanen (NIHL).',
                'level' => 'TINGGI',
                'warna_level' => 'merah',
                'pengendalian' => 'Machine guarding, sistem LOTO saat perbaikan, peredam suara turbin (enclosure), perlindungan telinga ganda (Earplug & Earmuff), pakaian kerja ketat, sarung tangan mekanik.',
            ],
            [
                'no' => 3,
                'aktivitas' => 'Menara Pendingin (Cooling Tower)',
                'bahaya' => '1. Bilah kipas pendingin raksasa.'."\n".'2. Ketinggian menara.'."\n".'3. Bakteri Legionella di uap lembab.',
                'risiko' => 'Terhisap kipas, terjatuh dari ketinggian (fatal), infeksi pernapasan Legionnaires.',
                'level' => 'TINGGI',
                'warna_level' => 'merah',
                'pengendalian' => 'Interlock system mematikan kipas otomatis, pagar pengaman handrail, injeksi pembunuh bakteri, body harness double lanyard, masker N95, safety shoes anti-selip.',
            ],
            [
                'no' => 4,
                'aktivitas' => 'Gardu Induk (Switchyard)',
                'bahaya' => '1. Kabel transmisi listrik tegangan tinggi.'."\n".'2. Kerusakan isolasi transformator.',
                'risiko' => 'Tersengat listrik (Electrocution), luka bakar akibat loncatan busur api listrik (Arc Flash).',
                'level' => 'SANGAT TINGGI',
                'warna_level' => 'merah-tua',
                'pengendalian' => 'Pagar isolasi berlapis, rambu bahaya listrik, sistem izin kerja khusus, helm safety kelas E (tahan listrik), sepatu & sarung tangan dielektrik.',
            ],
        ];

        // Matriks risiko
        $matriks_risiko = [
            'keterangan' => [
                ['level' => 'SANGAT RENDAH', 'warna' => '#10b981', 'skor' => '1-4',   'tindakan' => 'Pantau secara berkala'],
                ['level' => 'RENDAH',         'warna' => '#84cc16', 'skor' => '5-9',   'tindakan' => 'Tinjau dan perbaiki dalam 3 bulan'],
                ['level' => 'MENENGAH',       'warna' => '#f59e0b', 'skor' => '10-16', 'tindakan' => 'Perbaiki segera dalam 1 bulan'],
                ['level' => 'TINGGI',         'warna' => '#f97316', 'skor' => '17-24', 'tindakan' => 'Tindakan darurat dalam 1 minggu'],
                ['level' => 'SANGAT TINGGI',  'warna' => '#ef4444', 'skor' => '25',    'tindakan' => 'Hentikan pekerjaan — tindakan segera'],
            ],
        ];

        return view('pages.hirarc', compact('hierarki', 'tabel_hirarc', 'matriks_risiko'));
    }

    /**
     * Halaman Denah Evakuasi — Rencana Jalur Keselamatan Lantai 1 & Lantai 2
     */
    public function denah()
    {
        // Simbol Keselamatan
        $simbol = [
            [
                'nama' => 'Jalur Evakuasi',
                'icon' => 'globe', // reused icon
                'warna' => 'hijau',
                'deskripsi' => 'Rute teraman dan tercepat ditandai garis & panah hijau menuju titik kumpul.',
            ],
            [
                'nama' => 'Alat Pemadam Api Ringan (APAR)',
                'icon' => 'shield',
                'warna' => 'merah',
                'deskripsi' => 'Tabung pemadam merah ditempatkan di lorong & ruangan rawan kebakaran.',
            ],
            [
                'nama' => 'Kotak P3K',
                'icon' => 'check-circle',
                'warna' => 'hijau',
                'deskripsi' => 'Tersedia di area krusial untuk penanganan medis pertama.',
            ],
            [
                'nama' => 'Hidran Kebakaran',
                'icon' => 'alert-triangle',
                'warna' => 'merah',
                'deskripsi' => 'Terletak di dekat area produksi utama dan tangga darurat.',
            ],
            [
                'nama' => 'Lokasi Anda Sekarang',
                'icon' => 'map',
                'warna' => 'merah',
                'deskripsi' => 'Pin merah sebagai titik acuan evakuasi.',
            ],
        ];

        // Lantai 1: Area Operasional
        $lantai1 = [
            'nama' => 'Lantai 1 (Area Operasional Utama)',
            'fungsi' => 'Pusat produksi dan perawatan pembangkit.',
            'ruangan' => ['Area Turbin & Generator (Terluas)', 'Gudang Bahan Baku', 'Ruang Kontrol Lantai', 'Workshop Perawatan', 'Musholla', 'Toilet'],
            'prosedur' => 'Dalam keadaan darurat, evakuasi diarahkan langsung menuju pintu keluar terdekat di lantai dasar menuju Titik Kumpul (Assembly Point) di area parkir sebelah barat.',
        ];

        // Lantai 2: Area Administrasi
        $lantai2 = [
            'nama' => 'Lantai 2 (Area Manajemen & Administrasi)',
            'fungsi' => 'Fasilitas perkantoran, pengawasan kualitas, dan IT.',
            'ruangan' => ['Ruang Rapat (Meeting Room)', 'Ruang Administrasi', 'Laboratorium Kontrol Kualitas (QC Lab)', 'Ruang Server & IT', 'Kantor Manajemen', 'Kantor Staf Teknis'],
            'bahaya' => 'Void / Area Jatuh Potensial (lubang terbuka ke area produksi lantai bawah).',
            'prosedur' => 'Penghuni diarahkan menuju tangga darurat secara tertib melalui rute hijau, menuju tangga ke Lantai 1 atau pintu keluar sekunder di ujung lorong.',
        ];

        return view('pages.denah', compact('simbol', 'lantai1', 'lantai2'));
    }

    /**
     * Halaman Template — Pusat Unduhan Template K3
     */
    public function template()
    {
        // 6 kartu template unduhan
        $templates = [
            [
                'id' => 1,
                'icon' => 'alert-triangle',
                'nama' => 'Formulir Laporan Kecelakaan / Insiden PT Barito Renewables Energy Tbk',
                'nama_file' => 'FR-BREN-K3-001_Laporan_Kecelakaan_Insiden',
                'deskripsi' => 'Formulir standar pelaporan kecelakaan, near-miss, dan paparan gas H2S berlebih. Mencakup kronologi kejadian, analisa akar masalah, dan tindakan korektif.',
                'format' => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran' => '148 KB',
                'revisi' => 'Rev. 04 (BREN)',
                'kategori' => 'Pelaporan',
            ],
            [
                'id' => 2,
                'icon' => 'search',
                'nama' => 'Lembar Inspeksi Wellpad & Pipa Uap',
                'nama_file' => 'FR-BREN-K3-002_Inspeksi_Wellpad_Pipa',
                'deskripsi' => 'Checklist inspeksi harian area wellpad, monitoring kebocoran pipa transmisi uap, pemeriksaan wind sock, dan kalibrasi detektor H2S statis.',
                'format' => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran' => '92 KB',
                'revisi' => 'Rev. 02',
                'kategori' => 'Inspeksi',
            ],
            [
                'id' => 3,
                'icon' => 'edit',
                'nama' => 'Izin Kerja Kelistrikan (Permit to Work)',
                'nama_file' => 'FR-BREN-K3-003_Permit_To_Work_Listrik',
                'deskripsi' => 'Formulir persetujuan kerja (PTW) untuk pekerjaan di area Switchyard atau kelistrikan tegangan tinggi, dilengkapi checklist prosedur Lockout/Tagout (LOTO).',
                'format' => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran' => '74 KB',
                'revisi' => 'Rev. 02',
                'kategori' => 'Administrasi',
            ],
            [
                'id' => 4,
                'icon' => 'file-text',
                'nama' => 'Notulen / MOM Rapat Panitia K3 (P2K3)',
                'nama_file' => 'FR-BREN-K3-004_Notulen_MOM_P2K3',
                'deskripsi' => 'Template Minutes of Meeting (MOM) rapat bulanan komite keselamatan kerja (P2K3) PT Barito Renewables Energy Tbk guna membahas kepatuhan audit SMK3 dan tindak lanjut temuan bahaya.',
                'format' => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran' => '81 KB',
                'revisi' => 'Rev. 03',
                'kategori' => 'Administrasi',
            ],
            [
                'id' => 5,
                'icon' => 'hospital',
                'nama' => 'Form Pemeriksaan Medis MCU & Tes Paru Karyawan',
                'nama_file' => 'FR-BREN-K3-005_MCU_Kesehatan_Paru',
                'deskripsi' => 'Template rekam medis berkala karyawan PLTP, berfokus pada tes kesehatan paru-paru (spirometri) untuk memitigasi risiko jangka panjang paparan uap gas kimia.',
                'format' => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran' => '115 KB',
                'revisi' => 'Rev. 02',
                'kategori' => 'Kesehatan',
            ],
            [
                'id' => 6,
                'icon' => 'truck',
                'nama' => 'Jadwal Simulasi Tanggap Darurat Kebocoran Gas H2S',
                'nama_file' => 'FR-BREN-K3-006_Simulasi_Tanggap_Darurat_H2S',
                'deskripsi' => 'Template jadwal, skenario, dan evaluasi latihan berkala penanganan darurat kebocoran gas H2S, perakitan SCBA, dan evakuasi sesuai arah mata angin.',
                'format' => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran' => '98 KB',
                'revisi' => 'Rev. 01',
                'kategori' => 'Darurat',
            ],
        ];

        return view('pages.template', compact('templates'));
    }
}
