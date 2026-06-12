<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas Framework - High Performance PHP Native Frontend</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <style>

        body {
            font-family: 'Inter', sans-serif;
            background-color: #000000;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
        .card-black {
            background-color: #000000;
        }
        .border-subtle {
            border-color: #1f1f1f;
        }
        .code-block {
            background-color: #0a0a0a;
        }
        
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="text-gray-300 antialiased min-h-screen bg-black">

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-24">

        <!-- Hero Section (existing) -->
        <div class="bg-black rounded-3xl shadow-2xl p-10 md:p-20 text-center mb-8 relative overflow-hidden group border border-gray-800">
            <div id="lights" class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0 opacity-70">
                <canvas id="hyperspeed-canvas" class="w-full h-full"></canvas>
            </div>
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 bg-black/80 text-emerald-400 px-4 py-1.5 rounded-full font-mono text-xs font-bold mb-6 border border-emerald-800/50 backdrop-blur-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    CANVAS v1.0 • READY FOR PRODUCTION
                </div>
                <h1 class="text-6xl md:text-7xl font-black text-white mb-6 tracking-tighter leading-none max-w-5xl mx-auto">
                    Arsitektur Frontend Modern.<br class="hidden md:inline"> Built on <span class="text-indigo-500">Native PHP</span>.
                </h1>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-md mx-auto mb-12">
                    <div class="w-full sm:w-auto">
                        <?php 
                        if(class_exists('View')) {
                            View::komponen('tombol', [
                                'teks' => 'Gas Sekarang', 
                                'warna' => 'w-full bg-indigo-600 hover:bg-indigo-700 text-white shadow-lg shadow-indigo-950 font-bold py-3.5 px-8 rounded-xl transition duration-200 block text-center'
                            ]); 
                        } else {
                            echo '<a href="#" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white shadow-lg shadow-indigo-950 font-bold py-3.5 px-8 rounded-xl transition duration-200 block text-center">Gas Sekarang</a>';
                        }
                        ?>
                    </div>
                    <div class="w-full sm:w-auto">
                        <?php 
                        if(class_exists('View')) {
                            View::komponen('tombol', [
                                'teks' => 'Pelajari Modul CLI', 
                                'warna' => 'w-full bg-black hover:bg-gray-900 text-gray-200 border border-gray-700 font-bold py-3.5 px-8 rounded-xl transition duration-200 block text-center'
                            ]); 
                        } else {
                            echo '<a href="#" class="w-full sm:w-auto bg-black hover:bg-gray-900 text-gray-200 border border-gray-700 font-bold py-3.5 px-8 rounded-xl transition duration-200 block text-center">Pelajari Modul CLI</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="inline-flex items-center gap-3 bg-black/80 backdrop-blur-sm border border-gray-800 rounded-xl p-3 px-5 font-mono text-sm text-gray-300 max-w-full overflow-x-auto mx-auto">
                    <span class="text-indigo-400">$</span>
                    <span id="cli-command">php canvas gas 4000</span>
                    <button class="text-gray-500 hover:text-indigo-400 ml-4 border-l pl-3 border-gray-800 transition" onclick="navigator.clipboard.writeText('php canvas gas 4000')">Copy</button>
                </div>
            </div>
        </div>

        <!-- Client section (existing) -->
        <div class="bg-black rounded-3xl p-8 sm:p-10 border border-gray-800 mb-8 text-center">
            <div class="flex items-center justify-center gap-4 mb-8">
                <span class="h-[1px] w-8 sm:w-16 bg-gray-800"></span>
                <p class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-gray-500 font-bold whitespace-nowrap">
                    Menggerakkan Infrastruktur Aplikasi Global
                </p>
                <span class="h-[1px] w-8 sm:w-16 bg-gray-800"></span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-y-8 gap-x-4 items-center opacity-40 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-in-out select-none">
                <div class="flex justify-center items-center px-2"><span class="font-black text-lg sm:text-xl text-white tracking-tighter">Kasir<span class="text-indigo-500">Rancak</span></span></div>
                <div class="flex justify-center items-center px-2"><span class="font-sans font-extrabold tracking-tight text-white text-base sm:text-lg">abilsite<span class="text-indigo-500 font-light">.co</span></span></div>
                <div class="flex justify-center items-center px-2"><span class="font-mono font-bold uppercase tracking-wider text-white text-sm border-b-2 border-indigo-500 pb-0.5">JokiByKazz</span></div>
                <div class="flex justify-center items-center px-2"><span class="font-sans font-black text-xs text-white border border-gray-700 px-2 py-0.5 rounded tracking-wide whitespace-nowrap">SMKN 6 PADANG</span></div>
                <div class="flex justify-center items-center px-2"><div class="flex items-center gap-1.5 text-white font-bold tracking-tight text-sm sm:text-base"><span class="h-3 w-3 rounded-sm bg-indigo-500 rotate-45 flex-shrink-0"></span><span>QR-Attend</span></div></div>
                <div class="flex justify-center items-center px-2"><span class="font-mono text-xs sm:text-sm text-gray-400 font-bold tracking-tight">// nexa.core</span></div>
                <div class="flex justify-center items-center px-2"><span class="font-serif italic font-black text-lg text-white">Velo<span class="not-italic text-xs font-mono font-bold bg-gray-800 px-1 rounded ml-0.5 text-gray-300 border border-gray-700">CMS</span></span></div>
                <div class="flex justify-center items-center px-2"><span class="font-sans font-black uppercase text-white tracking-widest text-xs sm:text-sm">Apex<span class="text-indigo-500 font-mono">.</span>pos</span></div>
            </div>
        </div>

        <!-- Statistik card (existing) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-black p-6 rounded-2xl border border-gray-800 text-center"><div class="text-3xl md:text-4xl font-black text-white mb-1">0.002s</div><div class="text-xs font-mono text-gray-500 uppercase tracking-wider">Response Time Server</div></div>
            <div class="bg-black p-6 rounded-2xl border border-gray-800 text-center"><div class="text-3xl md:text-4xl font-black text-emerald-500 mb-1">100/100</div><div class="text-xs font-mono text-gray-500 uppercase tracking-wider">Lighthouse Score</div></div>
            <div class="bg-black p-6 rounded-2xl border border-gray-800 text-center"><div class="text-3xl md:text-4xl font-black text-white mb-1">0 KB</div><div class="text-xs font-mono text-gray-500 uppercase tracking-wider">JS Overhead Bawaan</div></div>
            <div class="bg-black p-4 sm:p-6 rounded-2xl border border-gray-800 text-center flex flex-col justify-center items-center"><div class="mb-1 flex items-center justify-center h-8 sm:h-9 md:h-10"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" class="w-auto h-7 sm:h-8 md:h-9 object-contain brightness-125" alt="PHP Framework Core Logo"></div><div class="text-[10px] sm:text-xs font-mono text-gray-500 uppercase tracking-wider">PHP Native Arch</div></div>
        </div>

        <!-- Modul Komponen (existing) -->
        <div class="text-center mt-16 mb-12">
            <h2 class="text-xs font-mono uppercase tracking-widest text-indigo-500 font-bold mb-4 block">Modul Komponen Terintegrasi</h2>
            <p class="text-3xl md:text-4xl font-black text-white tracking-tight">Segala yang Anda Butuhkan Untuk Menaklukkan Frontend</p>
        </div>

        <!-- Grid features (existing) -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <!-- Kartu 1: Routing -->
    <div class="bg-black p-6 rounded-2xl border border-gray-800 flex flex-col justify-between transition-all hover:border-indigo-500/50">
        <div>
            <div class="bg-indigo-950/50 border border-indigo-900 text-indigo-400 w-10 h-10 rounded-xl flex items-center justify-center mb-4 font-mono font-bold">01</div>
            <h3 class="text-xl font-bold text-white mb-2 tracking-tight">Routing Semantis</h3>
            <p class="text-sm text-gray-400 leading-relaxed">Router menangani URL statis & dinamis tanpa `.htaccess` rumit. Daftarkan rute dan render halaman dalam hitungan detik.</p>
        </div>
        <div class="mt-4 font-mono text-xs bg-black border border-gray-800 p-3 rounded-lg text-indigo-400 overflow-x-auto">Router::get('/dashboard', fn() => View::render('dashboard'));</div>
    </div>

    <!-- Kartu 2: Tailwind -->
    <div class="bg-black p-6 rounded-2xl border border-gray-800 flex flex-col justify-between transition-all hover:border-indigo-500/50">
        <div>
            <div class="bg-gray-900/50 border border-gray-700 text-gray-400 w-10 h-10 rounded-xl flex items-center justify-center mb-4 font-mono font-bold">02</div>
            <h3 class="text-xl font-bold text-white mb-2 tracking-tight">Utility-First Tailwind</h3>
            <p class="text-sm text-gray-400 leading-relaxed">Ribuan kelas utilitas styling tanpa menulis CSS manual. Responsif, hover, grid kompleks jadi mudah.</p>
        </div>
        <span class="text-xs font-mono text-gray-600 mt-4">Core Engine Terintegrasi</span>
    </div>

    <!-- Kartu 3: Enkapsulasi Komponen -->
    <div class="bg-black p-6 rounded-2xl border border-gray-800 flex flex-col justify-between transition-all hover:border-indigo-500/50">
        <div>
            <div class="bg-white text-gray-950 w-10 h-10 rounded-xl flex items-center justify-center mb-4 font-mono font-bold">03</div>
            <h3 class="text-xl font-bold text-white mb-2 tracking-tight">Enkapsulasi Komponen</h3>
            <p class="text-sm text-gray-400 leading-relaxed">Tulis tombol, modal, navigasi sekali, pakai di mana saja dengan injeksi props dinamis.</p>
        </div>
        <span class="text-xs font-mono text-indigo-400 mt-4">View::komponen('nama', $data);</span>
    </div>

    <!-- Kartu 4: Keamanan Bawaan (tambahan) -->
    <div class="bg-black p-6 rounded-2xl border border-gray-800 flex flex-col justify-between transition-all hover:border-indigo-500/50">
        <div>
            <div class="bg-emerald-950/50 border border-emerald-800 text-emerald-400 w-10 h-10 rounded-xl flex items-center justify-center mb-4 font-mono font-bold">04</div>
            <h3 class="text-xl font-bold text-white mb-2 tracking-tight">Keamanan Bawaan</h3>
            <p class="text-sm text-gray-400 leading-relaxed">CSRF protection, output escaping, dan validasi input otomatis. Aman dari XSS & SQL injection.</p>
        </div>
        <span class="text-xs font-mono text-emerald-400/70 mt-4">Secure by Default</span>
    </div>
</div>

        <!-- ========== KONTEN BARU: MENGAPA CANVAS? ========== -->
        <div class="grid md:grid-cols-2 gap-6 mb-20 mt-16">
            <div class="bg-black border border-gray-800 rounded-2xl p-8 hover:border-indigo-500/50 transition-all duration-300">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-2xl font-bold text-white mb-3">Kecepatan Tanpa Kompromi</h3>
                <p class="text-gray-400 leading-relaxed">Dengan eksekusi murni server-side dan tanpa JavaScript overhead, Canvas memuat halaman dalam milidetik. Setiap komponen di-render langsung menjadi HTML siap saji.</p>
            </div>
            <div class="bg-black border border-gray-800 rounded-2xl p-8 hover:border-indigo-500/50 transition-all duration-300">
                <div class="text-4xl mb-4">🔄</div>
                <h3 class="text-2xl font-bold text-white mb-3">Komponen Reusable</h3>
                <p class="text-gray-400 leading-relaxed">Sistem komponen berbasis PHP class dengan dukungan props dinamis. Tulis sekali, gunakan di seluruh proyek. Dukung nested komponen dan slot.</p>
            </div>
            <div class="bg-black border border-gray-800 rounded-2xl p-8 hover:border-indigo-500/50 transition-all duration-300">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-2xl font-bold text-white mb-3">Keamanan Bawaan</h3>
                <p class="text-gray-400 leading-relaxed">Canvas secara otomatis melakukan escaping output, CSRF protection, dan validasi input. Tidak perlu konfigurasi rumit untuk aman dari XSS & SQL injection.</p>
            </div>
            <div class="bg-black border border-gray-800 rounded-2xl p-8 hover:border-indigo-500/50 transition-all duration-300">
                <div class="text-4xl mb-4">📦</div>
                <h3 class="text-2xl font-bold text-white mb-3">Zero Dependencies</h3>
                <p class="text-gray-400 leading-relaxed">Framework ini tidak memerlukan Composer atau library eksternal. Cukup unggah ke server PHP 7.4+, dan Canvas siap berjalan. Ringan, cepat, portabel.</p>
            </div>
        </div>

        <!-- ========== FITUR UNGGULAN LAINNYA ========== -->
        <div class="text-center mt-8 mb-12">
            <h2 class="text-xs font-mono uppercase tracking-widest text-emerald-500 font-bold mb-4 block">Fitur Premium</h2>
            <p class="text-3xl md:text-4xl font-black text-white tracking-tight">Lebih dari Sekadar Templating Engine</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mb-20">
            <div class="bg-black rounded-xl border border-gray-800 overflow-hidden group hover:border-indigo-500 transition">
                <div class="p-6"><div class="w-12 h-12 rounded-full bg-indigo-950/50 flex items-center justify-center mb-4 text-indigo-400 text-xl font-mono font-bold">CLI</div><h3 class="text-xl font-bold text-white mb-2">Modul CLI Interaktif</h3><p class="text-gray-400 text-sm">Buat controller, komponen, dan middleware via terminal. Generate skeleton kode otomatis dengan perintah <code class="text-indigo-400">php canvas buat:halaman Home</code>.</p></div>
            </div>
            <div class="bg-black rounded-xl border border-gray-800 overflow-hidden group hover:border-indigo-500 transition">
                <div class="p-6"><div class="w-12 h-12 rounded-full bg-indigo-950/50 flex items-center justify-center mb-4 text-indigo-400 text-xl font-mono font-bold">DB</div><h3 class="text-xl font-bold text-white mb-2">Query Builder Ringan</h3><p class="text-gray-400 text-sm">Database abstraction dengan metode rantai yang intuitif. Dukung MySQL, PostgreSQL, SQLite. Tanpa ORM yang membengkak.</p></div>
            </div>
            <div class="bg-black rounded-xl border border-gray-800 overflow-hidden group hover:border-indigo-500 transition">
                <div class="p-6"><div class="w-12 h-12 rounded-full bg-indigo-950/50 flex items-center justify-center mb-4 text-indigo-400 text-xl font-mono font-bold">⚙️</div><h3 class="text-xl font-bold text-white mb-2">Middleware & Session</h3><p class="text-gray-400 text-sm">Filter request sebelum mencapai controller, kelola session dengan API sederhana, dan tingkatkan keamanan dengan mudah.</p></div>
            </div>
        </div>

        
        
        <!-- <div class="bg-gradient-to-r from-indigo-950/40 to-black border border-indigo-800/50 rounded-3xl p-10 md:p-16 text-center">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight">Siap Membangun Aplikasi <span class="text-indigo-500">Super Cepat?</span></h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto mb-8">Unduh Canvas Framework sekarang, gratis selamanya. Mulai dari CLI, dokumentasi lengkap, dan komunitas yang mendukung.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <?php 
                if(class_exists('View')) {
                    View::komponen('tombol', ['teks' => 'Mulai Sekarang', 'warna' => 'bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-4 rounded-xl font-bold text-lg']);
                    View::komponen('tombol', ['teks' => 'Dokumentasi', 'warna' => 'bg-black border border-gray-700 hover:bg-gray-900 text-gray-200 px-10 py-4 rounded-xl font-bold text-lg']);
                } else {
                    echo '<a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-4 rounded-xl font-bold text-lg">Mulai Sekarang</a>';
                    echo '<a href="#" class="bg-black border border-gray-700 hover:bg-gray-900 text-gray-200 px-10 py-4 rounded-xl font-bold text-lg">Dokumentasi</a>';
                }
                ?>
            </div>
            <p class="text-gray-500 text-sm mt-6">* Tidak perlu registrasi. Open source (MIT).</p>
        </div> -->

    </main>

    <!-- Script Canvas (tetap sama) -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const canvas = document.getElementById('hyperspeed-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');

        let width, height, cx, cy;
        const lines = [];
        
        const config = {
            totalLines: 85,
            speedUp: 2.5,
            distortionFreq: 0.003,
            distortionAmp: 45,
            colors: {
                leftCars: ['rgba(220, 91, 32, ', 'rgba(220, 163, 32, ', 'rgba(220, 32, 32, '],
                rightCars: ['rgba(51, 75, 247, ', 'rgba(229, 230, 237, ', 'rgba(191, 198, 243, '],
                sticks: 'rgba(197, 232, 235, '
            }
        };

        function resize() {
            width = canvas.width = canvas.parentElement.offsetWidth;
            height = canvas.height = canvas.parentElement.offsetHeight;
            cx = width / 2;
            cy = height * 0.50;
        }

        function createLine(line = {}) {
            line.z = Math.random() * 1000;
            line.speed = 7 + Math.random() * 13;
            line.side = Math.random() > 0.5 ? 'left' : 'right';
            line.lane = Math.floor(Math.random() * 3); 
            if (line.side === 'left') {
                line.colorArr = config.colors.leftCars;
            } else {
                line.colorArr = config.colors.rightCars;
            }
            line.color = line.colorArr[Math.floor(Math.random() * line.colorArr.length)];
            line.thickness = 1.2 + Math.random() * 2.2;
            return line;
        }

        function init() {
            window.addEventListener('resize', resize);
            resize();
            for (let i = 0; i < config.totalLines; i++) {
                lines.push(createLine());
            }
            animate(0);
        }

        function animate(time) {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.2)';
            ctx.fillRect(0, 0, width, height);
            const timestamp = time * 0.001;
            for (let i = 0; i < config.totalLines; i++) {
                let l = lines[i];
                l.z -= l.speed * config.speedUp;
                if (l.z <= 0) { createLine(l); }
                const fovFactor = 260 / l.z;
                const roadOffset = 40 + (l.lane * 28);
                const sideSign = l.side === 'left' ? -1 : 1;
                const distortionX = Math.sin(l.z * config.distortionFreq + timestamp) * config.distortionAmp;
                const distortionY = Math.cos(l.z * config.distortionFreq * 0.85 + timestamp) * (config.distortionAmp * 0.4);
                const x1 = ((sideSign * roadOffset) + distortionX) * fovFactor + cx;
                const y1 = (110 + distortionY) * fovFactor + cy;
                const nextFovFactor = 260 / (l.z + 50);
                const x2 = ((sideSign * roadOffset) + distortionX) * nextFovFactor + cx;
                const y2 = (110 + distortionY) * nextFovFactor + cy;
                const alpha = Math.min(1, (1000 - l.z) / 400) * (l.z / 1000);
                if (x1 >= 0 && x1 <= width && y1 >= 0 && y1 <= height) {
                    ctx.beginPath();
                    ctx.strokeStyle = l.color + alpha + ')';
                    ctx.lineWidth = Math.max(0.6, l.thickness * fovFactor * 0.45);
                    ctx.lineCap = 'round';
                    ctx.moveTo(x1, y1);
                    ctx.lineTo(x2, y2);
                    ctx.stroke();
                }
            }
            requestAnimationFrame(animate);
        }

        init();
    });
    </script>
</body>
</html>