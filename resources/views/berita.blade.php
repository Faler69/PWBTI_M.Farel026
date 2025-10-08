<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Harian Indonesia</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-50 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
        <div class="text-2xl font-bold text-green-600">Berita Harian Indonesia</div>
        <ul class="flex gap-6 text-gray-700 font-semibold">
            <li><a href="/" class="hover:text-green-500 transition">Home</a></li>
            <li><a href="/profil" class="hover:text-green-500 transition">Profil</a></li>
            <li><a href="/berita" class="hover:text-green-500 transition">Berita</a></li>
            <li><a href="/kontak" class="hover:text-green-500 transition">Kontak</a></li>
        </ul>
    </nav>

    <!-- Berita Section -->
    <section class="max-w-5xl mx-auto mt-16 px-6">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Berita Harian Indonesia</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Berita Card 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition flex flex-col">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Berita 1" class="rounded-lg mb-4 h-48 object-cover">
                <h2 class="text-xl font-bold mb-2">Pemerintah Umumkan Kebijakan Ekonomi Baru</h2>
                <p class="text-gray-600 mb-4">Kebijakan ekonomi terbaru diumumkan untuk mendukung pertumbuhan UMKM di Indonesia. Simak detail dan dampaknya bagi masyarakat.</p>
                <a href="#" class="mt-auto text-green-600 font-semibold hover:underline">Baca Selengkapnya</a>
            </div>
            <!-- Berita Card 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition flex flex-col">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Berita 2" class="rounded-lg mb-4 h-48 object-cover">
                <h2 class="text-xl font-bold mb-2">Teknologi Digital Meningkatkan Layanan Publik</h2>
                <p class="text-gray-600 mb-4">Transformasi digital di sektor pemerintahan mempercepat layanan publik dan memudahkan akses masyarakat ke informasi.</p>
                <a href="#" class="mt-auto text-green-600 font-semibold hover:underline">Baca Selengkapnya</a>
            </div>
            <!-- Berita Card 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition flex flex-col">
                <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=400&q=80" alt="Berita 3" class="rounded-lg mb-4 h-48 object-cover">
                <h2 class="text-xl font-bold mb-2">Olahraga Nasional: Prestasi Atlet Indonesia</h2>
                <p class="text-gray-600 mb-4">Atlet Indonesia kembali menorehkan prestasi di ajang internasional. Berikut rangkuman pencapaian terbaru mereka.</p>
                <a href="#" class="mt-auto text-green-600 font-semibold hover:underline">Baca Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 bg-white shadow-inner text-center text-gray-500">
        &copy; {{ date('Y') }} Berita Harian Indonesia. All rights reserved.
    </footer>
</body>
</html>