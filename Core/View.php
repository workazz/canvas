<?php

class View {
    // Menampilkan halaman error dengan gaya hitam-merah
    private static function showError($message, $code = 500) {
        http_response_code($code);
        // Matikan semua buffer sebelumnya
        while (ob_get_level()) ob_end_clean();

        $icon = '⚠️';
        $title = 'Framework Error';
        if ($code === 404) {
            $icon = '🔍';
            $title = 'Halaman Tidak Ditemukan';
        }

        echo <<<HTML
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$title} - System Error</title>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                body {
                    font-family: 'Segoe UI', 'Inter', system-ui, -apple-system, sans-serif;
                    background: #0a0a0a;
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 1.5rem;
                }
                .error-container {
                    max-width: 700px;
                    width: 100%;
                    background: #111111;
                    border-radius: 28px;
                    border-left: 6px solid #dc2626;
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8), 0 0 0 1px rgba(220, 38, 38, 0.15);
                    overflow: hidden;
                    transition: transform 0.2s ease;
                }
                .error-container:hover {
                    transform: translateY(-2px);
                }
                .error-header {
                    padding: 1.8rem 2rem;
                    background: rgba(220, 38, 38, 0.08);
                    border-bottom: 1px solid rgba(220, 38, 38, 0.2);
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                }
                .error-icon {
                    font-size: 2.6rem;
                    filter: drop-shadow(0 2px 4px rgba(220,38,38,0.3));
                }
                .error-title {
                    color: #facc15;
                    font-weight: 700;
                    font-size: 1.4rem;
                    letter-spacing: -0.2px;
                    background: linear-gradient(135deg, #f87171, #dc2626);
                    background-clip: text;
                    -webkit-background-clip: text;
                    color: transparent;
                }
                .error-body {
                    padding: 2rem;
                }
                .error-message {
                    background: #1a1a1a;
                    border-radius: 20px;
                    padding: 1.4rem 1.8rem;
                    font-family: 'JetBrains Mono', 'Fira Code', monospace;
                    font-size: 0.95rem;
                    color: #e5e7eb;
                    border: 1px solid #2a2a2a;
                    box-shadow: inset 0 1px 3px rgba(0,0,0,0.5), 0 1px 0 rgba(255,255,255,0.02);
                    overflow-x: auto;
                    white-space: pre-wrap;
                    word-break: break-word;
                }
                .error-message::before {
                    content: "🔴 ";
                    color: #ef4444;
                    font-weight: bold;
                }
                .error-footer {
                    padding: 1rem 2rem 1.8rem;
                    border-top: 1px solid #1f1f1f;
                    font-size: 0.8rem;
                    color: #6b7280;
                    text-align: center;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    gap: 0.8rem;
                }
                .error-code {
                    background: #1f1f1f;
                    padding: 0.25rem 0.75rem;
                    border-radius: 40px;
                    font-family: monospace;
                    font-size: 0.75rem;
                    color: #9ca3af;
                }
                .error-hint {
                    display: flex;
                    align-items: center;
                    gap: 0.4rem;
                }
                hr {
                    border: none;
                    border-top: 1px solid #222;
                }
                @media (max-width: 550px) {
                    .error-header { padding: 1.2rem 1.5rem; }
                    .error-body { padding: 1.5rem; }
                    .error-message { font-size: 0.85rem; padding: 1rem; }
                }
            </style>
        </head>
        <body>
            <div class="error-container">
                <div class="error-header">
                    <div class="error-icon">{$icon}</div>
                    <div class="error-title">{$title}</div>
                </div>
                <div class="error-body">
                    <div class="error-message">{$message}</div>
                </div>
                <div class="error-footer">
                    <span class="error-code">HTTP {$code}</span>
                    <span class="error-hint">🛠️ Framework Core • Hubungi developer jika berkelanjutan</span>
                </div>
            </div>
        </body>
        </html>
HTML;
        exit;
    }

    // Merender halaman penuh dengan layout utama
    public static function render($halaman, $data = []) {
        $pathHalaman = "../views/pages/{$halaman}.php";

        if (!file_exists($pathHalaman)) {
            self::showError("View halaman <strong>{$halaman}</strong> tidak ditemukan.<br>Path: <code>{$pathHalaman}</code>", 500);
        }

        extract($data);
        ob_start();
        require $pathHalaman;
        $konten = ob_get_clean();

        $pathLayout = "../views/layouts/utama.php";
        if (!file_exists($pathLayout)) {
            self::showError("Layout utama tidak ditemukan.<br>Path: <code>{$pathLayout}</code>", 500);
        }

        require $pathLayout;
    }

    // Memanggil komponen UI dengan Scope Terisolasi + error handling elegant
    public static function komponen($nama, $props = []) {
        $pathKomponen = "../views/components/{$nama}.php";

        if (!file_exists($pathKomponen)) {
            // Tampilkan error kecil yang stylish (tidak menghentikan eksekusi)
            $errorMsg = htmlspecialchars("Komponen '{$nama}' tidak ditemukan", ENT_QUOTES, 'UTF-8');
            echo <<<ERR
            <div style="background: #1e1a1a; border-left: 4px solid #dc2626; border-radius: 12px; padding: 0.8rem 1rem; margin: 0.5rem 0; font-family: monospace; font-size: 0.85rem; color: #fca5a5; box-shadow: 0 2px 6px rgba(0,0,0,0.3);">
                ⚠️ <strong style="color:#f87171;">Komponen Error</strong> — {$errorMsg}
                <span style="display: inline-block; margin-left: 1rem; font-size: 0.7rem; color: #7f1a1a;">[path: components/{$nama}.php]</span>
            </div>
ERR;
            return;
        }

        // Isolasi scope dengan closure
        $renderTerisolasi = function($__file_komponen, $__props_komponen) {
            extract($__props_komponen);
            require $__file_komponen;
        };
        $renderTerisolasi($pathKomponen, $props);
    }

    // Helper XSS
    public static function escape($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}