<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?? 'Canvas Framework' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #000000;
        }
    </style>
</head>
<body class="bg-black text-gray-300 antialiased min-h-screen flex flex-col">
    
    <?php View::komponen('navbar', ['namaBrand' => $namaBrand ?? 'Canvas.']); ?>

    <main class="container mx-auto px-6 py-8 flex-grow">
        <?= $konten ?? '' ?>   <!-- ← tambah ?? '' -->
    </main>

    <footer class="bg-black border-t border-gray-800 text-center py-6 mt-10 text-gray-400 text-sm">
        &copy; <?= date('Y') ?> Dibangun dengan <span class="text-indigo-400 font-semibold">Canvas</span> 
    </footer>

</body>
</html>