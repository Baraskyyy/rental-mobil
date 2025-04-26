<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sewa Sekarang - RentalMobil.id</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-blue-700 text-white py-6">
    <div class="container mx-auto px-6">
      <h1 class="text-3xl font-bold">Sewa Mobil Sekarang</h1>
      <p class="text-sm text-gray-200 mt-1">Isi formulir berikut untuk melakukan pemesanan mobil</p>
    </div>
  </header>

  <!-- Formulir Sewa -->
  <main class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-8 mt-10 mb-16">
    <form action="{{ route('form.store') }}" method="POST" class="space-y-6">
      @csrf
      <!-- Nama -->
      <div>
        <label for="nama" class="block font-semibold text-gray-700 mb-2">Nama Lengkap</label>
        <input type="text" id="nama" name="nama"
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
               placeholder="Contoh: Andi Setiawan" required>
      </div>

      <!-- No HP -->
      <div>
        <label for="telepon" class="block font-semibold text-gray-700 mb-2">Nomor WhatsApp</label>
        <input type="tel" id="telepon" name="phone_number"
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
               placeholder="+62 812-3456-789" required>
      </div>

      <!-- Tanggal Sewa -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="tanggal_mulai" class="block font-semibold text-gray-700 mb-2">Tanggal Mulai</label>
          <input type="date" id="tanggal_mulai" name="tanggal_mulai"
                 class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
          <label for="tanggal_selesai" class="block font-semibold text-gray-700 mb-2">Tanggal Selesai</label>
          <input type="date" id="tanggal_selesai" name="tanggal_selesai"
                 class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
        </div>
      </div>

      <!-- Pilih Mobil -->
      <div>
        <label for="mobil" class="block font-semibold text-gray-700 mb-2">Pilih Mobil</label>
        <select id="mobil" name="mobil"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" required>
          <option value="">-- Pilih Mobil --</option>
          <option value="avanza">Toyota Avanza</option>
          <option value="brio">Honda Brio</option>
          <option value="innova">Toyota Innova</option>
          <option value="fortuner">Toyota Fortuner</option>
        </select>
      </div>

      <!-- Tombol Kirim -->
      <div class="text-center">
        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg w-full md:w-auto">
          Sewa Sekarang
        </button>
      </div>
    </form>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-700 text-white py-6 text-center">
    &copy; 2025 RentalMobil.id — Semua Hak Dilindungi.
  </footer>

</body>
</html>
