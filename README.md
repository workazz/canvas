# Canvass Framework

Canvass adalah framework PHP Native berkinerja tinggi yang mengusung arsitektur minimalis modern. Dirancang khusus untuk membangun aplikasi web cepat tanpa ketergantungan pada library pihak ketiga (**Zero Dependencies**), framework ini memberikan kontrol penuh kepada pengembang atas siklus hidup aplikasi serta menyediakan integrasi siap pakai dengan utility-first CSS framework dan asisten kecerdasan buatan langsung melalui terminal.

---

## Daftar Isi
1. [Fitur Utama](#fitur-utama)
2. [Arsitektur dan Struktur Direktori](#arsitektur-dan-struktur-direktori)
3. [Persyaratan Sistem](#persyaratan-sistem)
4. [Instalasi dan Alur Siklus Hidup](#instalasi-dan-alur-siklus-hidup)
5. [Konfigurasi Utama](#konfigurasi-utama)
6. [Panduan Command Line Interface (CLI)](#panduan-command-line-interface-cli)
7. [Dokumentasi Pengembangan Sistem](#dokumentasi-pengembangan-sistem)
   - [Manajemen Rute (Routing)](#1-manajemen-rute-routing)
   - [Sistem Render Halaman (Views)](#2-sistem-render-halaman-views)
   - [Isolasi Komponen UI](#3-sistem-isolasi-komponen-ui)
   - [Perlindungan Keamanan (Anti-XSS)](#4-perlindungan-keamanan-anti-xss)
8. [Arsitektur Penanganan Kesalahan (Error Handling)](#arsitektur-penanganan-kesalahan-error-handling)
9. [Integrasi DeepSeek AI Agent](#integrasi-deepseek-ai-agent)
10. [Lisensi](#lisensi)

---

## Fitur Utama

- **Front Controller Pattern**: Seluruh permintaan HTTP disatukan dan dikelola melalui satu berkas entri utama (`public/index.php`) untuk menjaga konsistensi pengelolaan state dan request.
- **Regex Routing Engine**: Pencocokan URL menggunakan Regular Expression yang mendukung pencatatan rute statis biasa maupun ekstraksi parameter variabel dinamis di dalam kurung kurawal `{}`.
- **Isolated Component Scope**: Mekanisme render komponen visual berbasis fungsi anonim (*Anonymous Function / Closure*) untuk mengunci ruang lingkup variabel agar tidak terjadi kebocoran data antar elemen antarmuka.
- **Native Tailwind CSS Integration**: Menggunakan penyusunan antarmuka utility-first yang disuntikkan secara dinamis pada berkas layout induk tanpa memerlukan kompilasi server side (*NodeJS/npm build tools*).
- **Premium Dark Mode Error Handler**: Menangkap error runtime dan exception objek secara global, lalu menyajikannya dalam visualisasi halaman gelap premium terintegrasi untuk mempercepat proses pelacakan kode eror.
- **Lokal CLI Utilities**: Perangkat baris perintah mandiri (`canvas`) berbasis bahasa Indonesia untuk mengotomatisasi pembuatan berkas aplikasi tanpa penulisan manual berkala.
- **AI Code Assistant**: Integrasi native dengan API DeepSeek untuk melakukan konsultasi arsitektur dan pemecahan bug teknis langsung dari console terminal.

---

## Arsitektur dan Struktur Direktori

Struktur direktori di bawah ini wajib dijaga polanya agar proses pemuatan komponen (*autoloader*) dan pendeteksian jalur berkas internal dapat berjalan dengan valid:

```text
CANVAS/
├── Core/
│   ├── AI.php            # Modul penghubung API ke infrastruktur kecerdasan buatan DeepSeek
│   ├── Router.php        # Komponen internal pengelola, pencocok, dan pengeksekusi rute HTTP
│   └── View.php          # Engine utama pemroses layout, halaman, isolasi komponen, dan filter XSS
├── public/
│   └── index.php         # Front Controller, penangan error global, dan penata otomatisasi kelas
├── routes/
│   └── web.php           # Berkas sentral pendaftaran seluruh endpoint dan rute URL aplikasi
├── vendor/               # Direktori penyimpanan komponen pihak ketiga standar (jika digunakan)
├── views/
│   ├── components/       # Direktori khusus penyimpanan potongan elemen UI reusable (navbar, footer, dll)
│   ├── layouts/          # Struktur tata letak induk aplikasi (utama.php)
│   └── pages/            # Berkas utama konten per halaman aplikasi
├── canvas                # Berkas skrip executable penggerak utilitas pengembang (CLI Canvass)
└── composer.json         # Konfigurasi standar manajemen paket dependensi PHP
