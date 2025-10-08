<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Farel PWB TI 2024</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-50 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
        <div class="text-2xl font-bold text-red-600">Farel PWB TI 2024</div>
        <ul class="flex gap-6 text-gray-700 font-semibold">
            <li><a href="/" class="hover:text-red-500 transition">Home</a></li>
            <li><a href="/profil" class="hover:text-red-500 transition">Profil</a></li>
            <li><a href="/berita" class="hover:text-red-500 transition">Berita</a></li>
            <li><a href="/kontak" class="hover:text-red-500 transition">Kontak</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-20 px-6 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Selamat Datang di Website Farel PWB TI 2024</h1>
        <p class="text-lg text-gray-600 mb-8">Website ini merupakan portal utama untuk informasi, berita, dan komunitas mahasiswa Teknik Informatika Politeknik Negeri Banyuwangi.</p>
        <a href="/home" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold shadow hover:bg-red-700 transition">Masuk ke Halaman Home</a>
    </main>

    <!-- Footer -->
    <footer class="mt-20 py-8 bg-white shadow-inner text-center text-gray-500">
        &copy; {{ date('Y') }} Farel PWB TI 2024. All rights reserved.
    </footer>
</body>
</html>
