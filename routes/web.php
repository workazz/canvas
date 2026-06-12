<?php
// Tempat khusus mendaftarkan semua rute aplikasi kamu

Router::get('/', function() {
    View::render('beranda', [
        'judul' => 'Canvas',
        'sapaan' => 'Selamat Datang di Canvas Framework!'
    ]);
});

Router::get('/tentang', function() {
    View::render('tentang', ['judul' => 'Tentang Kami']);
});

Router::get('/layanan', function() {
    View::render('layanan', ['judul' => 'Layanan']);
});

