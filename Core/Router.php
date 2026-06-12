<?php

class Router {
    private static $rute = [];

    // Mendaftarkan rute GET
    public static function get($uri, $fungsi) {
        self::$rute['GET'][$uri] = $fungsi;
    }

    // Mendaftarkan rute POST (Baru)
    public static function post($uri, $fungsi) {
        self::$rute['POST'][$uri] = $fungsi;
    }

    // Menjalankan router
    public static function jalankan() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $metode = $_SERVER['REQUEST_METHOD'];

        // 1. Coba cari pencocokan langsung (Statis) dulu demi performa
        if (isset(self::$rute[$metode][$uri])) {
            call_user_func(self::$rute[$metode][$uri]);
            return;
        }

        // 2. Jika tidak ada yang cocok secara statis, cari pencocokan dinamis (Regex)
        foreach (self::$rute[$metode] ?? [] as $ruteTerdaftar => $fungsi) {
            // Mengubah format {param} menjadi regex ([\w-]+)
            $polaRegex = preg_replace('/\{[\w]+\}/', '([\w-]+)', $ruteTerdaftar);
            // Bungkus regex agar mencocokkan dari awal sampai akhir string
            $polaRegex = "#^" . $polaRegex . "$#";

            // Cocokkan URI saat ini dengan pola regex
            if (preg_match($polaRegex, $uri, $matches)) {
                // Hapus elemen pertama hasil matches (karena itu adalah full string URI)
                array_shift($matches);
                
                // Panggil fungsi callback dan kirimkan parameternya (misal: $id)
                call_user_func_array($fungsi, $matches);
                return;
            }
        }

        // 3. Jika benar-benar tidak ditemukan
        http_response_code(404);
        View::render('404', ['judul' => '404 - Tidak Ditemukan']);
    }
}
?>