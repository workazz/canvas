<?php
// 1. Tampilkan error saat mode development
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Registrasi Autoloader Otomatis (BARU!)
// Jadi kamu gak perlu ketik require_once satu-satu lagi untuk class di folder Core
spl_autoload_register(function ($namaClass) {
    $file = "../Core/{$namaClass}.php";
    if (file_exists($file)) {
        require_once $file;
    }
});

// 3. Panggil file konfigurasi rute (BARU!)
if (file_exists('../routes/web.php')) {
    require_once '../routes/web.php';
} else {
    die("Framework Error: File rute [routes/web.php] tidak ditemukan.");
}

// 4. Jalankan Router
Router::jalankan();