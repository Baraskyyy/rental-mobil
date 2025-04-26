@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Dashboard Admin</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
  <!-- Total Mobil -->
  <div class="bg-red-100 dark:bg-gray-800 p-4 rounded shadow-lg transition hover:scale-[1.02] duration-300 ease-in-out">
    <div class="flex items-center gap-4">
      <div class="bg-red-200 p-2 rounded-full text-red-800">🚗</div>
      <div>
        <h3 class="text-sm text-gray-500 dark:text-gray-300">Total Mobil</h3>
        <p class="text-2xl font-bold text-gray-900 dark:text-white">24</p>
      </div>
    </div>
  </div>

  <!-- Pemesanan Hari Ini -->
  <div class="bg-yellow-100 dark:bg-gray-800 p-4 rounded shadow-lg transition hover:scale-[1.02] duration-300 ease-in-out">
    <div class="flex items-center gap-4">
      <div class="bg-yellow-200 p-2 rounded-full text-yellow-800">📅</div>
      <div>
        <h3 class="text-sm text-gray-500 dark:text-gray-300">Pemesanan Hari Ini</h3>
        <p class="text-2xl font-bold text-gray-900 dark:text-white">8</p>
      </div>
    </div>
  </div>

  <!-- Pendapatan Bulan Ini -->
  <div class="bg-green-100 dark:bg-green-200 p-4 rounded shadow-lg transition hover:scale-[1.02] duration-300 ease-in-out">
    <div class="flex items-center gap-4">
      <div class="bg-green-200 p-2 rounded-full text-green-800">💰</div>
      <div>
        <h3 class="text-sm text-gray-500 dark:text-gray-700">Pendapatan Bulan Ini</h3>
        <p class="text-2xl font-bold text-gray-900 dark:text-black">Rp 12.500.000</p>
      </div>
    </div>
  </div>

  <!-- Pelanggan Baru -->
  <div class="bg-blue-100 dark:bg-gray-800 p-4 rounded shadow-lg transition hover:scale-[1.02] duration-300 ease-in-out">
    <div class="flex items-center gap-4">
      <div class="bg-blue-200 p-2 rounded-full text-blue-800">👥</div>
      <div>
        <h3 class="text-sm text-gray-500 dark:text-gray-300">Pelanggan Baru</h3>
        <p class="text-2xl font-bold text-gray-900 dark:text-white">15</p>
      </div>
    </div>
  </div>
</div>

<!-- Chart Section -->
<div class="bg-white dark:bg-gray-800 p-6 rounded shadow mb-6">
  <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Statistik Pemesanan Bulanan</h2>
  <canvas id="chartPemesanan" height="100"></canvas>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('chartPemesanan').getContext('2d');
  const chartPemesanan = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
      datasets: [{
        label: 'Jumlah Pemesanan',
        data: [12, 19, 8, 15, 23, 17, 10],
        borderColor: 'rgba(59, 130, 246, 1)',
        backgroundColor: 'rgba(59, 130, 246, 0.1)',
        fill: true,
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endpush
