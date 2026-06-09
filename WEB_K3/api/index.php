<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// 1. Buat direktori sementara di Vercel jika belum ada
$tmpDirs = [
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($tmpDirs as $dir) {
    if (! file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Paksa Laravel agar log & view dialihkan ke /tmp dan stderr
putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

try {
    // 3. Muat file pembangun inti Laravel
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';

    // 4. PENTING: Belokkan folder penyimpanan ke /tmp
    $app->useStoragePath('/tmp/storage');

    // 5. Jalankan aplikasi (Mendukung Laravel 10 & 11)
    if (method_exists($app, 'handleRequest')) {
        $app->handleRequest(Request::capture());
    } else {
        $kernel = $app->make(Kernel::class);
        $response = $kernel->handle(
            $request = Request::capture()
        )->send();
        $kernel->terminate($request, $response);
    }
} catch (Throwable $e) {
    // Jika ada error, tampilkan ke layar untuk debugging
    echo "<div style='font-family: sans-serif; padding: 20px; background: #fff5f5; color: #c53030; border: 1px solid #fed7d7; border-radius: 8px;'>";
    echo '<h1>🚨 Error Terdeteksi:</h1>';
    echo '<p><b>Pesan:</b> '.$e->getMessage().'</p>';
    echo '<p><b>File:</b> '.$e->getFile().' di baris <b>'.$e->getLine().'</b></p>';
    echo '</div>';
}
