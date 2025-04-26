@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  <!-- Header (Judul + Tombol) -->
  <div class="flex justify-between items-start flex-wrap gap-4 mb-6">
    <!-- Judul dan Deskripsi -->
    <div>
      <h1 class="text-2xl font-bold text-gray-800 dark:text-white">History Pesanan</h1>
    </div>

    <!-- Tombol Tambah Data -->

  </div>

  <!-- Tabel Pemesanan -->
  <div class="random-bg dark:bg-gray-800 shadow rounded-lg overflow-x-auto">
    <table class="min-w-full text-left">
      <thead class="bg-blue-600 dark:bg-blue-700 text-white">
        <tr>
          <th class="py-3 px-4">Nama</th>
          <th class="py-3 px-4">Mobil</th>
          <th class="py-3 px-4">Tanggal</th>
          <th class="py-3 px-4">Durasi</th>
          <th class="py-3 px-4">Status</th>
        </tr>
      </thead>
      <tbody class="text-gray-700 dark:text-gray-200">
        <tr class="random-row border-b border-gray-200 dark:border-gray-600">
          <td class="py-3 px-4">Budi</td>
          <td class="py-3 px-4">Avanza</td>
          <td class="py-3 px-4">2025-04-18</td>
          <td class="py-3 px-4">2 Hari</td>
          <td class="py-3 px-4">
            <span class="bg-green-700 dark:bg-green-700 text-white dark:text-green-300 text-xs font-semibold px-2 py-1 rounded">Selesai</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('.random-row');
    const lightColors = [
      'bg-green-100',
      'bg-blue-100',
      'bg-yellow-100',
      'bg-purple-100',
      'bg-pink-100',
      'bg-indigo-100',
      'bg-gray-100'
    ];

    const isDark = document.documentElement.classList.contains('dark');
    rows.forEach(row => {
      const colors = lightColors; // Ubah kalau kamu aktifkan darkColors
      const randomColor = colors[Math.floor(Math.random() * colors.length)];
      row.classList.add(randomColor);
    });
  });
</script>
