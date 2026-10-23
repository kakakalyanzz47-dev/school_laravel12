<?php

// Jalankan pembuatan file database SQLite di folder temporary Vercel
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
    
    // Otomatis jalankan migrasi database
    putenv('APP_ENV=production');
    $app = require __DIR__ . '/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->call('migrate', ['--force' => true]);
}

// Teruskan request ke Laravel public/index.php resmi
require __DIR__ . '/../public/index.php';