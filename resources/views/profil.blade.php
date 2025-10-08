<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Farel PWB TI 2024</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-50 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
        <div class="text-2xl font-bold text-green-600">Farel PWB TI 2024</div>
        <ul class="flex gap-6 text-gray-700 font-semibold">
            <li><a href="/" class="hover:text-green-500 transition">Home</a></li>
            <li><a href="/profil" class="hover:text-green-500 transition">Profil</a></li>
            <li><a href="/berita" class="hover:text-green-500 transition">Berita</a></li>
            <li><a href="/kontak" class="hover:text-green-500 transition">Kontak</a></li>
        </ul>
    </nav>

    <!-- Profil Section -->
    <section class="max-w-3xl mx-auto mt-16 px-6 bg-green-50 rounded-xl shadow-lg py-10">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=300&q=80" alt="Profil Mahasiswa" class="rounded-full w-40 h-40 object-cover shadow-md">
            <div>
                <h1 class="text-3xl font-bold text-green-700 mb-2">Muhammad Farel</h1>
                <h2 class="text-xl text-green-600 font-semibold mb-4">Mahasiswa Teknologi Informasi</h2>
                <p class="text-green-700 mb-4">Universitas Muhammadiyah Semarang</p>
            </div>
        </div>
    </section>

    <!-- Biodata Section -->
    <section class="max-w-3xl mx-auto mt-10 px-6">
        <div class="bg-green-50 rounded-xl shadow p-8">
            <h3 class="text-2xl font-bold text-green-700 mb-4">Biodata</h3>
            <ul class="text-green-700 space-y-2">
                <li><strong>Nama:</strong> Muhammad Farel</li>
                <li><strong>NIM:</strong> 13242420026</li>
                <li><strong>Program Studi:</strong> Teknologi Informasi</li>
                <li><strong>Kampus:</strong> Universitas Muhammadiyah</li>
                <li><strong>Email:</strong> mh.farel140206@gmail.com</li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 bg-white shadow-inner text-center text-gray-500">
        &copy; {{ date('Y') }} Berita Harian Indonesia. All rights reserved.
    </footer>
</body>
</html>
