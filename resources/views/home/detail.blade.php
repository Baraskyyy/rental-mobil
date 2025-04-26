<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Mobil - Toyota Avanza</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Tombol kembali hanya tampil di mobile -->
    <a href="/" class="flex items-center gap-1 text-sm bg-gray-100 text-gray-700 px-3 py-1 rounded hover:bg-gray-200 transition md:hidden">
      <!-- Icon Panah -->
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
           xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      Kembali
    </a>

    <h1 class="text-2xl font-bold text-blue-600">RentalMobil.id</h1>

    <!-- Tombol ke beranda tetap tampil di semua ukuran layar -->
    <a href="index.html" class="text-sm text-blue-600 hover:underline">Kembali ke Beranda</a>
  </div>
</header>

  <!-- Detail Mobil -->
  <main class="max-w-6xl mx-auto px-6 py-16">
    <div class="grid md:grid-cols-2 gap-10 items-start">
      <!-- Gambar -->
      <div>
        <img src="{{ asset('asset/avanza.jpeg') }}" alt="Toyota Avanza" class="rounded-xl shadow-md w-full">
      </div>

      <!-- Detail -->
      <div>
        <h2 class="text-3xl font-bold mb-4">Toyota Avanza</h2>
        <p class="text-gray-600 mb-1">Rp 350.000 <span class="text-sm text-gray-400">/ hari <b>( Tanpa Sopir )</b></span></p>
        <p class="text-gray-600 mb-4">Rp 350.000 <span class="text-sm text-gray-400">/ hari <b>( Sopir )</b></span></p>
        <p class="mb-6 text-gray-700 leading-relaxed">
          Toyota Avanza adalah pilihan mobil keluarga yang nyaman dan hemat bahan bakar. Dilengkapi dengan AC dingin, audio system modern, dan kapasitas hingga 7 orang.
        </p>

        <ul class="mb-6 text-sm text-gray-600 space-y-2">
          <li>✅ AC Dingin</li>
          <li>✅ Audio Bluetooth</li>
          <li>✅ Kapasitas 7 Penumpang</li>
          <li>✅ Transmisi Manual</li>
        </ul>

        <div class="flex gap-4">
          <a href="/" class="px-5 py-2 rounded-md border border-gray-400 hover:bg-gray-200 transition text-sm">← Kembali</a>
          <a href="{{ route('form') }}" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Sewa Sekarang</a>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white text-center py-6 border-t text-sm text-gray-600">
    <p>&copy; 2025 RentalMobil.id. All rights reserved.</p>
  </footer>
</body>
</html>
