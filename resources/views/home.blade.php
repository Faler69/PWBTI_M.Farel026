<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Farel PWB TI 2024</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 min-h-screen">
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

  <!-- Hero Section -->
  <section class="flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto mt-16 px-6 gap-10">
    <div class="flex-1">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">Selamat Datang di <span class="text-red-600">Farel PWB TI 2024</span></h1>
      <p class="text-lg text-gray-600 mb-8">Platform informasi, berita, dan komunitas untuk mahasiswa Teknik Informatika Politeknik Negeri Banyuwangi. Temukan berita terbaru, profil, dan info penting lainnya di sini!</p>
      <a href="/berita" class="inline-block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-red-700 transition">Lihat Berita Terbaru</a>
    </div>
    <div class="flex-1 flex justify-center">
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=500&q=80" alt="Mahasiswa TI" class="rounded-2xl shadow-2xl w-full max-w-md">
    </div>
  </section>

  <!-- Features Section -->
  <section class="max-w-6xl mx-auto mt-20 px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" /></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Berita Terkini</h3>
        <p class="text-gray-600">Dapatkan update berita terbaru seputar kampus, teknologi, dan kegiatan mahasiswa.</p>
      </div>
      <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-4V6a4 4 0 00-8 0v4m12 0a4 4 0 01-8 0" /></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Komunitas Aktif</h3>
        <p class="text-gray-600">Bergabung dengan komunitas mahasiswa TI yang aktif dan saling mendukung.</p>
      </div>
      <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0V4m0 8v8" /></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Informasi Lengkap</h3>
        <p class="text-gray-600">Akses informasi penting seputar jadwal, event, dan pengumuman kampus.</p>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="max-w-4xl mx-auto mt-20 px-6 text-center">
    <h2 class="text-3xl font-bold mb-4">Gabung Bersama Kami!</h2>
    <p class="text-gray-600 mb-6">Jadilah bagian dari komunitas Teknik Informatika Poliwangi dan dapatkan manfaatnya.</p>
    <a href="/kontak" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold shadow hover:bg-red-700 transition">Hubungi Kami</a>
  </section>

  <!-- Footer -->
  <footer class="mt-20 py-8 bg-white shadow-inner text-center text-gray-500">
    &copy; {{ date('Y') }} Farel PWB TI 2024. All rights reserved.
  </footer>
</body>
</html>