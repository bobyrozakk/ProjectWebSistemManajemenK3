<?php

/**
 * SmkController.php
 * Controller utama untuk website Dokumentasi SMK3
 * Semua data bersifat dummy (hardcoded) — tanpa database
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmkController extends Controller
{
    /**
     * Halaman Beranda — Pengantar & Fungsi Dokumentasi SMK3
     */
    public function home()
    {
        // Data fungsi utama SMK3
        $fungsi = [
            [
                'icon'        => 'clipboard',
                'judul'       => 'Menyatukan Kebijakan & Sasaran K3',
                'deskripsi'   => 'Dokumentasi SMK3 menjadi wadah penyatuan seluruh kebijakan, tujuan, dan sasaran keselamatan dan kesehatan kerja dalam satu sistem yang terstruktur dan mudah diakses oleh seluruh pemangku kepentingan perusahaan.',
                'warna'       => 'biru',
            ],
            [
                'icon'        => 'users',
                'judul'       => 'Menjelaskan Peran & Tanggung Jawab',
                'deskripsi'   => 'Setiap dokumen SMK3 secara eksplisit mendefinisikan peran, wewenang, dan tanggung jawab setiap posisi dalam organisasi terkait pengelolaan K3, memastikan tidak ada celah dalam pelaksanaan program keselamatan.',
                'warna'       => 'emas',
            ],
            [
                'icon'        => 'check-circle',
                'judul'       => 'Bukti Penerapan SMK3 di Perusahaan',
                'deskripsi'   => 'Dokumentasi yang lengkap dan terpelihara menjadi bukti nyata komitmen perusahaan dalam menerapkan SMK3 sesuai PP No. 50 Tahun 2012, sekaligus sebagai bahan audit internal maupun eksternal.',
                'warna'       => 'hijau',
            ],
        ];

        // Data manfaat dokumentasi SMK3
        $manfaat = [
            [
                'icon'      => 'search',
                'judul'     => 'Alat Pemahaman Sistem',
                'deskripsi' => 'Membantu seluruh karyawan memahami sistem K3 yang berlaku di perusahaan secara menyeluruh dan konsisten.',
            ],
            [
                'icon'      => 'radio',
                'judul'     => 'Komunikasi Proses Organisasi',
                'deskripsi' => 'Menjadi media komunikasi resmi antar departemen dalam hal prosedur, instruksi kerja, dan protokol keselamatan.',
            ],
            [
                'icon'      => 'chart',
                'judul'     => 'Mengukur Efektivitas K3',
                'deskripsi' => 'Rekaman dan laporan menjadi indikator terukur keberhasilan implementasi program K3 di lapangan.',
            ],
            [
                'icon'      => 'award',
                'judul'     => 'Dasar Peningkatan Berkelanjutan',
                'deskripsi' => 'Dokumentasi menjadi referensi untuk evaluasi dan continuous improvement sistem manajemen K3 perusahaan.',
            ],
        ];

        // Data statistik dummy
        $statistik = [
            ['angka' => '7',  'label' => 'Modul Pembelajaran',   'icon' => 'book'],
            ['angka' => '4',  'label' => 'Level Dokumen SMK3',   'icon' => 'layers'],
            ['angka' => '6',  'label' => 'Template Siap Unduh',  'icon' => 'download'],
            ['angka' => '3',  'label' => 'Jenis Diagram Alir',   'icon' => 'workflow'],
            ['angka' => '5',  'label' => 'Level Pengendalian',   'icon' => 'shield'],
        ];

        return view('pages.home', compact('fungsi', 'manfaat', 'statistik'));
    }

    /**
     * Halaman Regulasi — Dasar Hukum & Regulasi SMK3
     */
    public function regulasi()
    {
        // Perbandingan OHSAS 18001 vs PP No. 50/2012
        $perbandingan = [
            [
                'aspek'   => 'Jenis Standar',
                'ohsas'   => 'Standar Internasional (Voluntary)',
                'pp50'    => 'Peraturan Pemerintah (Wajib)',
            ],
            [
                'aspek'   => 'Penerbit',
                'ohsas'   => 'British Standards Institution (BSI)',
                'pp50'    => 'Pemerintah Republik Indonesia',
            ],
            [
                'aspek'   => 'Tahun Terbit',
                'ohsas'   => '1999 (revisi 2007)',
                'pp50'    => '2012',
            ],
            [
                'aspek'   => 'Ruang Lingkup',
                'ohsas'   => 'Berlaku global, semua jenis industri',
                'pp50'    => 'Perusahaan di Indonesia (50+ pekerja / risiko tinggi)',
            ],
            [
                'aspek'   => 'Sertifikasi',
                'ohsas'   => 'Wajib oleh lembaga sertifikasi terakreditasi',
                'pp50'    => 'Audit oleh lembaga audit yang ditunjuk pemerintah',
            ],
            [
                'aspek'   => 'Pendekatan',
                'ohsas'   => 'Plan-Do-Check-Act (PDCA)',
                'pp50'    => 'Penetapan kebijakan → Perencanaan → Penerapan → Pengukuran → Tinjauan',
            ],
            [
                'aspek'   => 'Elemen Utama',
                'ohsas'   => '4 klausul utama (4.1 - 4.6)',
                'pp50'    => '5 prinsip dasar, 12 elemen, 166 kriteria',
            ],
            [
                'aspek'   => 'Sanksi Pelanggaran',
                'ohsas'   => 'Kehilangan sertifikasi',
                'pp50'    => 'Sanksi administratif sesuai perundangan ketenagakerjaan',
            ],
        ];

        // Regulasi nasional Indonesia
        $regulasi_nasional = [
            [
                'kode'       => 'UU No. 1/1970',
                'judul'      => 'Undang-Undang Keselamatan Kerja',
                'isi'        => 'Landasan utama hukum K3 di Indonesia. Mengatur syarat keselamatan kerja, kewajiban pengusaha, hak pekerja, dan pengawasan K3 oleh pemerintah.',
                'kategori'   => 'Undang-Undang',
                'warna'      => 'biru',
            ],
            [
                'kode'       => 'Permenaker 05/1996',
                'judul'      => 'Sistem Manajemen K3',
                'isi'        => 'Peraturan menteri pertama yang mengatur SMK3 secara komprehensif di Indonesia. Menjadi cikal bakal PP 50/2012 dengan 12 elemen dan 166 kriteria audit.',
                'kategori'   => 'Permenaker',
                'warna'      => 'emas',
            ],
            [
                'kode'       => 'PP No. 50/2012',
                'judul'      => 'Penerapan Sistem Manajemen K3',
                'isi'        => 'Peraturan pemerintah yang mewajibkan penerapan SMK3 bagi perusahaan dengan 100+ pekerja atau tingkat risiko tinggi. Menggantikan Permenaker 05/1996.',
                'kategori'   => 'Peraturan Pemerintah',
                'warna'      => 'merah',
            ],
            [
                'kode'       => 'Permenaker 26/2014',
                'judul'      => 'Penyelenggaraan Penilaian SMK3',
                'isi'        => 'Mengatur tata cara penilaian penerapan SMK3 oleh lembaga audit independen yang ditunjuk Menteri Ketenagakerjaan.',
                'kategori'   => 'Permenaker',
                'warna'      => 'hijau',
            ],
        ];

        // Timeline riwayat regulasi K3 Indonesia
        $timeline = [
            ['tahun' => '1970', 'peristiwa' => 'UU No. 1/1970 tentang Keselamatan Kerja diterbitkan — landasan hukum K3 pertama di Indonesia.'],
            ['tahun' => '1992', 'peristiwa' => 'UU No. 3/1992 tentang Jaminan Sosial Tenaga Kerja (JAMSOSTEK) — perlindungan sosial bagi pekerja termasuk kecelakaan kerja.'],
            ['tahun' => '1996', 'peristiwa' => 'Permenaker No. 05/1996 tentang SMK3 — sistem manajemen K3 pertama kali diregulasikan secara formal.'],
            ['tahun' => '1999', 'peristiwa' => 'OHSAS 18001:1999 diterbitkan secara internasional oleh BSI sebagai standar global sistem manajemen K3.'],
            ['tahun' => '2003', 'peristiwa' => 'UU No. 13/2003 tentang Ketenagakerjaan — memperkuat hak dan kewajiban terkait K3 dalam hubungan kerja.'],
            ['tahun' => '2007', 'peristiwa' => 'OHSAS 18001:2007 — revisi standar internasional dengan pendekatan yang lebih terintegrasi dengan ISO 9001 dan ISO 14001.'],
            ['tahun' => '2012', 'peristiwa' => 'PP No. 50/2012 menggantikan Permenaker 05/1996 — SMK3 kini menjadi kewajiban hukum yang lebih kuat.'],
            ['tahun' => '2018', 'peristiwa' => 'ISO 45001:2018 menggantikan OHSAS 18001 sebagai standar internasional SMK3 yang baru dan lebih komprehensif.'],
            ['tahun' => '2024', 'peristiwa' => 'Implementasi berkelanjutan SMK3 dengan integrasi digital dan sistem pelaporan online berbasis teknologi informasi.'],
        ];

        return view('pages.regulasi', compact('perbandingan', 'regulasi_nasional', 'timeline'));
    }

    /**
     * Halaman Tingkatan — Level Dokumen SMK3
     */
    public function tingkatan()
    {
        // Data 4 level dokumen SMK3
        $levels = [
            [
                'level'      => 1,
                'nama'       => 'Manual SMK3',
                'icon'       => 'book',
                'warna'      => '#1a3a5c',
                'isi'        => 'Kebijakan K3, Tujuan & Sasaran, Struktur Organisasi K3, Ruang Lingkup SMK3',
                'pengguna'   => 'Manajemen Puncak, Auditor, Regulator',
                'deskripsi'  => 'Dokumen tertinggi dalam hierarki SMK3. Berisi pernyataan komitmen manajemen puncak terhadap K3, kebijakan dasar perusahaan, dan gambaran umum sistem manajemen yang diterapkan. Bersifat rahasia dan terbatas distribusinya.',
                'contoh'     => ['Kebijakan K3 Perusahaan', 'Manual SMK3 Edisi 2024', 'Profil Risiko Perusahaan'],
            ],
            [
                'level'      => 2,
                'nama'       => 'Prosedur',
                'icon'       => 'clipboard',
                'warna'      => '#2563eb',
                'isi'        => 'Langkah-langkah sistematis pelaksanaan kegiatan, Penanggung jawab, Referensi',
                'pengguna'   => 'Manajer, Supervisor, Kepala Departemen',
                'deskripsi'  => 'Dokumen yang menjelaskan cara melakukan suatu proses atau kegiatan secara berurutan dan sistematis. Prosedur menjawab pertanyaan "siapa melakukan apa, kapan, dan bagaimana". Biasanya ditulis dalam format narasi atau flowchart.',
                'contoh'     => ['SOP Identifikasi Bahaya', 'Prosedur Penanganan Kecelakaan', 'SOP Inspeksi K3'],
            ],
            [
                'level'      => 3,
                'nama'       => 'Instruksi Kerja',
                'icon'       => 'settings',
                'warna'      => '#f0a500',
                'isi'        => 'Langkah detail teknis operasional, Spesifikasi teknis, Gambar/foto panduan',
                'pengguna'   => 'Operator, Teknisi, Pekerja Lapangan',
                'deskripsi'  => 'Panduan teknis langkah demi langkah untuk melaksanakan tugas spesifik yang memerlukan keahlian tertentu. Instruksi kerja jauh lebih detail dari prosedur dan biasanya dilengkapi dengan ilustrasi, gambar teknis, atau foto panduan.',
                'contoh'     => ['IK Pengoperasian Forklift', 'IK Pengelasan Listrik', 'IK Penggunaan APAR'],
            ],
            [
                'level'      => 4,
                'nama'       => 'Rekaman / Formulir',
                'icon'       => 'folder',
                'warna'      => '#10b981',
                'isi'        => 'Formulir isian, Laporan hasil kegiatan, Log book, Daftar hadir',
                'pengguna'   => 'Semua Level Karyawan',
                'deskripsi'  => 'Bukti objektif pelaksanaan kegiatan SMK3. Rekaman diisi setelah kegiatan dilaksanakan dan merupakan dasar pengambilan keputusan serta perbaikan berkelanjutan. Wajib diarsip sesuai ketentuan perusahaan.',
                'contoh'     => ['Form Laporan Kecelakaan', 'Daftar Hadir Rapat K3', 'Checklist Inspeksi Harian'],
            ],
        ];

        // Data tabel ringkasan
        $tabel_ringkasan = [
            ['level' => 1, 'nama' => 'Manual SMK3',        'isi' => 'Kebijakan, tujuan, sasaran, struktur organisasi K3',   'pengguna' => 'Manajemen Puncak'],
            ['level' => 2, 'nama' => 'Prosedur (SOP)',      'isi' => 'Langkah sistematis pelaksanaan proses K3',              'pengguna' => 'Manajer, Supervisor'],
            ['level' => 3, 'nama' => 'Instruksi Kerja',     'isi' => 'Panduan teknis detail operasional K3',                 'pengguna' => 'Operator, Teknisi'],
            ['level' => 4, 'nama' => 'Rekaman / Formulir',  'isi' => 'Bukti pelaksanaan dan pencatatan kegiatan K3',         'pengguna' => 'Semua Karyawan'],
        ];

        return view('pages.tingkatan', compact('levels', 'tabel_ringkasan'));
    }

    /**
     * Halaman Flowchart — Panduan Diagram Alir Prosedur
     */
    public function flowchart()
    {
        // Data 3 jenis diagram alir
        $jenis_flowchart = [
            [
                'nomor'      => '01',
                'nama'       => 'Diagram Alir Operasi',
                'subtitle'   => 'Operation Flow Chart',
                'icon'       => 'settings',
                'warna'      => '#1a3a5c',
                'penggunaan' => 'Paling umum digunakan dalam dokumentasi SMK3',
                'deskripsi'  => 'Diagram yang menggambarkan urutan langkah-langkah operasional suatu proses secara berurutan dari atas ke bawah. Menggunakan simbol standar seperti lingkaran (mulai/selesai), persegi panjang (proses), dan berlian (keputusan).',
                'kelebihan'  => ['Mudah dibaca oleh semua level pekerja', 'Standar simbol yang universal', 'Ideal untuk SOP sederhana', 'Mudah diperbarui'],
                'contoh_penggunaan' => 'Prosedur tanggap darurat kebakaran, SOP penggunaan APD, Alur penanganan kecelakaan kerja',
                'simbol_flowchart'  => [
                    ['bentuk' => 'oval',    'label' => 'MULAI / SELESAI',  'warna' => '#1a3a5c'],
                    ['bentuk' => 'kotak',   'label' => 'PROSES / AKSI',    'warna' => '#2563eb'],
                    ['bentuk' => 'berlian', 'label' => 'KEPUTUSAN (Ya/Tidak)', 'warna' => '#f0a500'],
                    ['bentuk' => 'kotak',   'label' => 'DOKUMEN / OUTPUT', 'warna' => '#10b981'],
                    ['bentuk' => 'oval',    'label' => 'SELESAI',          'warna' => '#1a3a5c'],
                ],
            ],
            [
                'nomor'      => '02',
                'nama'       => 'Diagram Alir Fungsional',
                'subtitle'   => 'Functional Flow Chart',
                'icon'       => 'users',
                'warna'      => '#7c3aed',
                'penggunaan' => 'Digunakan saat proses melibatkan banyak departemen atau pihak',
                'deskripsi'  => 'Diagram yang menampilkan proses beserta fungsi atau penanggung jawab masing-masing langkah. Menggunakan kolom (swim lanes) untuk memisahkan tanggung jawab setiap departemen atau jabatan secara visual.',
                'kelebihan'  => ['Jelas siapa bertanggung jawab atas setiap proses', 'Mudah identifikasi handoff antar departemen', 'Ideal untuk proses lintas fungsi', 'Memudahkan koordinasi tim'],
                'contoh_penggunaan' => 'Prosedur investigasi kecelakaan, Alur persetujuan dokumen K3, Proses audit SMK3',
                'simbol_flowchart'  => [
                    ['bentuk' => 'header-col', 'label' => 'HSE Manager | Supervisor | Operator | HRD', 'warna' => '#7c3aed'],
                    ['bentuk' => 'swim-lane',  'label' => 'Setiap kolom = satu penanggung jawab',      'warna' => '#a78bfa'],
                    ['bentuk' => 'panah',      'label' => 'Proses berpindah antar kolom (handoff)',    'warna' => '#7c3aed'],
                ],
            ],
            [
                'nomor'      => '03',
                'nama'       => 'Diagram Alir Layout',
                'subtitle'   => 'Layout Flow Chart',
                'icon'       => 'map',
                'warna'      => '#059669',
                'penggunaan' => 'Digunakan untuk hitung waktu proses & diagnosa lalu lintas kerja',
                'deskripsi'  => 'Diagram yang menggambarkan alur pergerakan orang, material, atau informasi pada denah fisik area kerja. Sangat berguna untuk mengidentifikasi bottleneck, menghitung waktu tempuh, dan mendiagnosa inefisiensi tata letak tempat kerja.',
                'kelebihan'  => ['Visualisasi pergerakan di area kerja nyata', 'Mudah identifikasi titik kemacetan', 'Dasar perbaikan tata letak (layout)', 'Berguna untuk ergonomi dan keselamatan'],
                'contoh_penggunaan' => 'Jalur evakuasi darurat, Alur pergerakan forklift di gudang, Peta lokasi APAR dan P3K',
                'simbol_flowchart'  => [
                    ['bentuk' => 'denah',   'label' => 'Denah Area Kerja (skala)',  'warna' => '#059669'],
                    ['bentuk' => 'panah',   'label' => 'Garis Alir Pergerakan',     'warna' => '#10b981'],
                    ['bentuk' => 'titik',   'label' => 'Titik Kegiatan / Pos',      'warna' => '#34d399'],
                ],
            ],
        ];

        return view('pages.flowchart', compact('jenis_flowchart'));
    }

    /**
     * Halaman Pengendalian — Protokol Pengendalian Dokumen
     */
    public function pengendalian()
    {
        // Kriteria minimum dokumen SMK3
        $kriteria_dokumen = [
            ['item' => 'Judul Dokumen',              'deskripsi' => 'Nama dokumen yang jelas dan spesifik, mencerminkan isi dokumen.',          'wajib' => true],
            ['item' => 'Nomor Dokumen',              'deskripsi' => 'Kode unik sesuai sistem penomoran perusahaan (misal: SMK3/SOP/K3/001).',    'wajib' => true],
            ['item' => 'Tanggal Terbit',             'deskripsi' => 'Tanggal dokumen pertama kali diterbitkan dan berlaku efektif.',             'wajib' => true],
            ['item' => 'Nomor Revisi',               'deskripsi' => 'Versi dokumen saat ini (dimulai dari Rev. 00 atau Rev. 01).',               'wajib' => true],
            ['item' => 'Nomor Halaman',              'deskripsi' => 'Format "Halaman X dari Y" untuk memastikan kelengkapan dokumen.',           'wajib' => true],
            ['item' => 'Ruang Lingkup',              'deskripsi' => 'Area atau departemen yang wajib mengikuti ketentuan dalam dokumen ini.',     'wajib' => true],
            ['item' => 'Tanda Tangan Persetujuan',   'deskripsi' => 'Tanda tangan pembuat, pemeriksa, dan penyetuju (approval) dokumen.',        'wajib' => true],
            ['item' => 'Daftar Distribusi',          'deskripsi' => 'Daftar pihak yang menerima salinan dokumen terkendali.',                    'wajib' => false],
            ['item' => 'Riwayat Perubahan',          'deskripsi' => 'Tabel yang menampilkan riwayat revisi, tanggal, dan ringkasan perubahan.',  'wajib' => false],
            ['item' => 'Referensi Dokumen',          'deskripsi' => 'Daftar dokumen, standar, atau regulasi yang menjadi acuan.',               'wajib' => false],
        ];

        // Status dokumen
        $status_dokumen = [
            [
                'kode'       => 'TERKENDALI',
                'warna'      => 'hijau',
                'hex'        => '#10b981',
                'deskripsi'  => 'Dokumen resmi yang terdaftar, diberi nomor seri unik, dan dijamin selalu diperbarui oleh bagian pengendali dokumen saat ada revisi. Pemegang wajib mengembalikan dokumen lama saat menerima revisi baru.',
                'contoh'     => 'Salinan asli yang didistribusikan ke departemen terkait.',
            ],
            [
                'kode'       => 'TIDAK TERKENDALI',
                'warna'      => 'merah',
                'hex'        => '#ef4444',
                'deskripsi'  => 'Salinan dokumen yang dibuat untuk keperluan informal (referensi pribadi, pelatihan, dll). Tidak dijamin kekiniannya — bisa saja sudah tidak berlaku. Harus diberi stempel "TIDAK TERKENDALI" dengan tinta merah.',
                'contoh'     => 'Fotokopi untuk keperluan pelatihan, referensi studi.',
            ],
            [
                'kode'       => 'READ ONLY',
                'warna'      => 'biru',
                'hex'        => '#3b82f6',
                'deskripsi'  => 'Dokumen dalam format digital yang hanya bisa dibaca, tidak dapat dimodifikasi. Biasanya tersimpan di server atau intranet perusahaan dengan hak akses terbatas.',
                'contoh'     => 'File PDF yang dikunci, dokumen di portal intranet perusahaan.',
            ],
            [
                'kode'       => 'USANG / OBSOLETE',
                'warna'      => 'abu',
                'hex'        => '#6b7280',
                'deskripsi'  => 'Dokumen yang sudah tidak berlaku karena telah direvisi atau dicabut. Wajib ditarik dari semua tempat distribusi dan dimusnahkan atau diarsip dengan label USANG/OBSOLETE agar tidak terpakai lagi.',
                'contoh'     => 'SOP versi lama setelah terbit SOP versi terbaru.',
            ],
        ];

        // Aturan dokumen usang
        $aturan_usang = [
            'Tarik seluruh salinan dokumen usang dari semua lokasi distribusi dalam waktu 5 hari kerja setelah revisi baru diterbitkan.',
            'Dokumen usang fisik wajib dimusnahkan (dirobek atau dihancurkan) untuk mencegah penggunaan tidak sengaja.',
            'Satu salinan dokumen usang boleh disimpan sebagai arsip dengan label "USANG" berukuran besar dan tinta merah mencolok.',
            'Sistem penomoran revisi menggunakan format: Rev. 00 (pertama), Rev. 01, Rev. 02, dan seterusnya.',
            'Setiap perubahan wajib dicatat dalam tabel riwayat revisi beserta alasan perubahan.',
            'Dokumen usang digital wajib dipindahkan ke folder khusus "ARSIP USANG" dan tidak boleh berada di folder aktif.',
        ];

        return view('pages.pengendalian', compact('kriteria_dokumen', 'status_dokumen', 'aturan_usang'));
    }

    /**
     * Halaman HIRARC — Manajemen Risiko & HIRARC
     */
    public function hirarc()
    {
        // Hierarki pengendalian risiko (Inverted Pyramid — dari terluas/paling efektif ke tersempit)
        $hierarki = [
            [
                'level'      => 1,
                'nama'       => 'Eliminasi',
                'icon'       => 'alert-triangle',
                'warna'      => '#1a3a5c',
                'lebar_persen'=> 100,
                'deskripsi'  => 'Menghilangkan bahaya secara permanen dari tempat kerja. Merupakan cara pengendalian PALING efektif.',
                'contoh'     => 'Menghentikan penggunaan bahan kimia berbahaya, Mengganti pekerjaan manual berbahaya dengan otomatisasi penuh',
                'efektivitas'=> 'Sangat Tinggi',
            ],
            [
                'level'      => 2,
                'nama'       => 'Substitusi',
                'icon'       => 'workflow',
                'warna'      => '#2563eb',
                'lebar_persen'=> 82,
                'deskripsi'  => 'Mengganti bahaya dengan sesuatu yang lebih aman atau risiko lebih rendah.',
                'contoh'     => 'Mengganti pelarut organik dengan air, Mengganti mesin bising dengan mesin senyap',
                'efektivitas'=> 'Tinggi',
            ],
            [
                'level'      => 3,
                'nama'       => 'Rekayasa (Engineering)',
                'icon'       => 'settings',
                'warna'      => '#f0a500',
                'lebar_persen'=> 64,
                'deskripsi'  => 'Memodifikasi atau mendesain ulang peralatan/mesin/proses untuk mengurangi bahaya.',
                'contoh'     => 'Pasang pelindung mesin (machine guard), Ventilasi lokal (local exhaust), Isolasi kebisingan',
                'efektivitas'=> 'Menengah-Tinggi',
            ],
            [
                'level'      => 4,
                'nama'       => 'Pengendalian Administrasi',
                'icon'       => 'clipboard',
                'warna'      => '#7c3aed',
                'lebar_persen'=> 46,
                'deskripsi'  => 'Mengubah cara kerja melalui prosedur, pelatihan, tanda bahaya, dan pembatasan waktu paparan.',
                'contoh'     => 'SOP kerja aman, Rotasi pekerja, Rambu K3, Pelatihan rutin, Izin Kerja (Work Permit)',
                'efektivitas'=> 'Menengah',
            ],
            [
                'level'      => 5,
                'nama'       => 'APD (Alat Pelindung Diri)',
                'icon'       => 'hard-hat',
                'warna'      => '#ef4444',
                'lebar_persen'=> 28,
                'deskripsi'  => 'Melindungi pekerja secara langsung dari bahaya yang tersisa. Upaya terakhir — bukan pertama.',
                'contoh'     => 'Helm, Sepatu safety, Kacamata pelindung, Masker respirator, Sarung tangan',
                'efektivitas'=> 'Rendah (sebagai satu-satunya kontrol)',
            ],
        ];

        // Contoh tabel HIRARC dummy
        $tabel_hirarc = [
            [
                'no'          => 1,
                'aktivitas'   => 'Pekerjaan Pengelasan Listrik',
                'bahaya'      => 'Sinar UV, percikan api (spatter), asap las berbahaya',
                'risiko'      => 'Kerusakan mata, luka bakar kulit, keracunan asap',
                'level'       => 'TINGGI',
                'warna_level' => 'merah',
                'pengendalian'=> 'Layar pelindung las, Welding helmet, Masker las, Ventilasi lokal, SOP pengelasan',
            ],
            [
                'no'          => 2,
                'aktivitas'   => 'Pengoperasian Forklift',
                'bahaya'      => 'Tabrakan forklift dengan pekerja pejalan kaki',
                'risiko'      => 'Tertabrak, terjepit, kematian',
                'level'       => 'SANGAT TINGGI',
                'warna_level' => 'merah-tua',
                'pengendalian'=> 'Jalur khusus forklift, Rambu peringatan, Klakson otomatis, SOP forklift, Izin operasional',
            ],
            [
                'no'          => 3,
                'aktivitas'   => 'Bekerja di Ketinggian (>2m)',
                'bahaya'      => 'Jatuh dari ketinggian',
                'risiko'      => 'Patah tulang, cedera berat, kematian',
                'level'       => 'SANGAT TINGGI',
                'warna_level' => 'merah-tua',
                'pengendalian'=> 'Full body harness, Scaffolding kokoh, Safety net, Izin Kerja Ketinggian, Pelatihan WAH',
            ],
            [
                'no'          => 4,
                'aktivitas'   => 'Penanganan Bahan Kimia B3',
                'bahaya'      => 'Tumpahan, inhalasi uap kimia berbahaya',
                'risiko'      => 'Keracunan, iritasi kulit/mata, penyakit akibat kerja',
                'level'       => 'TINGGI',
                'warna_level' => 'merah',
                'pengendalian'=> 'Substitusi bahan kimia, Lemari penyimpanan B3 berventilasi, APD kimia, MSDS tersedia',
            ],
            [
                'no'          => 5,
                'aktivitas'   => 'Pengangkatan Manual (Manual Handling)',
                'bahaya'      => 'Beban melebihi kapasitas ergonomis pekerja',
                'risiko'      => 'Cedera punggung, musculoskeletal disorder (MSDs)',
                'level'       => 'MENENGAH',
                'warna_level' => 'kuning',
                'pengendalian'=> 'Batasi beban maks. 25kg, Pelatihan teknik angkat aman, Gunakan alat bantu angkat',
            ],
            [
                'no'          => 6,
                'aktivitas'   => 'Pekerjaan Listrik (Electrical Work)',
                'bahaya'      => 'Sengatan listrik, hubungan arus pendek',
                'risiko'      => 'Elektrokusi, kebakaran, kematian',
                'level'       => 'TINGGI',
                'warna_level' => 'merah',
                'pengendalian'=> 'LOTO (Lockout-Tagout), Izin Kerja Listrik, Tester tegangan, Sarung tangan dielektrik',
            ],
            [
                'no'          => 7,
                'aktivitas'   => 'Kebisingan di Area Produksi',
                'bahaya'      => 'Paparan kebisingan >85 dBA dalam 8 jam kerja',
                'risiko'      => 'Gangguan pendengaran akibat kerja (NIHL)',
                'level'       => 'MENENGAH',
                'warna_level' => 'kuning',
                'pengendalian'=> 'Enclosure mesin bising, Rotasi pekerja, Ear plug/ear muff, Pemeriksaan audiometri berkala',
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
     * Halaman Template — Pusat Unduhan Template SMK3
     */
    public function template()
    {
        // Data 6 kartu template unduhan
        $templates = [
            [
                'id'          => 1,
                'icon'        => 'alert-triangle',
                'nama'        => 'Formulir Laporan Kecelakaan / Insiden',
                'nama_file'   => 'FR-K3-001_Laporan_Kecelakaan_Insiden',
                'deskripsi'   => 'Formulir standar pelaporan kecelakaan dan near-miss di tempat kerja. Mencakup kronologi kejadian, analisis penyebab, dan tindakan perbaikan. Wajib diisi dalam 24 jam setelah kejadian.',
                'format'      => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran'      => '145 KB',
                'revisi'      => 'Rev. 03',
                'kategori'    => 'Pelaporan',
            ],
            [
                'id'          => 2,
                'icon'        => 'search',
                'nama'        => 'Lembar Inspeksi & Audit K3',
                'nama_file'   => 'FR-K3-002_Inspeksi_Audit_K3',
                'deskripsi'   => 'Checklist komprehensif untuk kegiatan inspeksi rutin dan audit K3. Mencakup penilaian kondisi fisik tempat kerja, kelengkapan APD, rambu K3, dan kondisi peralatan kerja.',
                'format'      => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran'      => '88 KB',
                'revisi'      => 'Rev. 02',
                'kategori'    => 'Inspeksi',
            ],
            [
                'id'          => 3,
                'icon'        => 'edit',
                'nama'        => 'Daftar Hadir Rapat K3',
                'nama_file'   => 'FR-K3-003_Daftar_Hadir_Rapat_K3',
                'deskripsi'   => 'Formulir presensi standar untuk kegiatan rapat K3 rutin, toolbox meeting, safety briefing, dan sesi pelatihan. Dilengkapi kolom tanda tangan dan catatan materi yang disampaikan.',
                'format'      => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran'      => '62 KB',
                'revisi'      => 'Rev. 01',
                'kategori'    => 'Administrasi',
            ],
            [
                'id'          => 4,
                'icon'        => 'file-text',
                'nama'        => 'Notulen / MOM Rapat K3',
                'nama_file'   => 'FR-K3-004_Notulen_Rapat_K3',
                'deskripsi'   => 'Template Minutes of Meeting (MOM) untuk mendokumentasikan hasil rapat K3. Mencakup poin-poin pembahasan, keputusan, penanggung jawab, dan target penyelesaian setiap action item.',
                'format'      => 'DOCX',
                'warna_badge' => 'biru',
                'ukuran'      => '79 KB',
                'revisi'      => 'Rev. 02',
                'kategori'    => 'Administrasi',
            ],
            [
                'id'          => 5,
                'icon'        => 'hospital',
                'nama'        => 'Formulir Hasil Tes Medis',
                'nama_file'   => 'FR-K3-005_Hasil_Tes_Medis_Karyawan',
                'deskripsi'   => 'Template pencatatan hasil pemeriksaan kesehatan berkala karyawan (MCU). Mencakup data vital, hasil laboratorium ringkas, status kesehatan, dan rekomendasi tindak lanjut dari dokter perusahaan.',
                'format'      => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran'      => '112 KB',
                'revisi'      => 'Rev. 02',
                'kategori'    => 'Kesehatan',
            ],
            [
                'id'          => 6,
                'icon'        => 'truck',
                'nama'        => 'Jadwal Latihan Tanggap Darurat',
                'nama_file'   => 'FR-K3-006_Jadwal_Latihan_Tanggap_Darurat',
                'deskripsi'   => 'Template perencanaan dan dokumentasi latihan kesiapsiagaan darurat (fire drill, evakuasi, pertolongan pertama). Mencakup skenario, jadwal, peserta, evaluator, dan formulir evaluasi pasca latihan.',
                'format'      => 'XLSX',
                'warna_badge' => 'hijau',
                'ukuran'      => '95 KB',
                'revisi'      => 'Rev. 01',
                'kategori'    => 'Darurat',
            ],
        ];

        return view('pages.template', compact('templates'));
    }
}
