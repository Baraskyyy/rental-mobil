<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Mobil Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
      .modal-enter {
        animation: fadeIn 0.3s ease-out;
      }
      @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
      }
    </style>
  </head>
      <!-- Navbar -->
      <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
           <!-- Tombol kembali tampil di semua device -->
    <a href="/" class="flex items-center gap-1 text-sm bg-gray-100 text-gray-700 px-3 py-1 rounded hover:bg-gray-200 transition">
      <!-- Icon Panah -->
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
           xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      Kembali
    </a>
          <h1 class="text-2xl font-bold text-blue-600">RentalMobil.id</h1>
          <nav class="hidden md:flex gap-6 text-gray-700 font-medium">
            <a href="#" class="hover:text-blue-600">Beranda</a>
            <a href="#cars" class="hover:text-blue-600">Mobil</a>
            <a href="#" class="hover:text-blue-600">Tentang</a>
            <a href="#" class="hover:text-blue-600">Kontak</a>
          </nav>
        </div>
      </header>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- Daftar Mobil Lengkap -->
<main class="py-20 px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- @foreach($mobils as $mobil) --}}
        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden">
          <!-- Gambar -->
          <div class="h-48 w-full overflow-hidden">
            <img src="{{ asset('asset/avanza.jpeg') }}" class="w-full h-full object-cover object-center">
          </div>
      
          <!-- Konten -->
          <div class="flex flex-col flex-grow p-4 justify-between">
            <h3 class="text-lg font-semibold text-center text-gray-800 mb-3">avanza</h3>
      
            <!-- Harga -->
            <div class="space-y-3">
              <!-- Tanpa Sopir -->
              <div class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-2 rounded-lg flex justify-between items-center">
                <span>Tanpa Sopir</span>
                <span class="font-bold">Rp. 300.000</span>
              </div>
      
              <!-- Dengan Sopir -->
              <div class="bg-green-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg flex justify-between items-center">
                <span>Dengan Sopir</span>
                <span class="font-bold">Rp. 600.000</span>
              </div>
              <!-- Dengan Sopir -->
              <div class="bg-yellow-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg flex justify-between items-center">
                <span>Status</span>
                <span class="font-bold">Ready</span>
              </div>
            </div>
      
            <!-- Tombol Detail -->
            <button onclick="openModal('avanza', 'yayaya')" class="mt-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2 rounded-lg transition w-full">
              Lihat Detail
            </button>
          </div>
        </div>
        {{-- @endforeach --}}
      </div>
      
      

    <!-- Pagination -->
    <div class="mt-12 text-center">
      {{-- {{ $mobils->links() }} --}}
    </div>
  </div>
</main>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-xl shadow-lg p-6 max-w-md w-full modal-enter relative">
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl">&times;</button>
    <h3 id="modalTitle" class="text-2xl font-bold mb-3">Judul Mobil</h3>
    <p id="modalDesc" class="text-gray-700">Deskripsi mobil...</p>
  </div>
</div>

<!-- Footer -->
@include('themes.footer')

<!-- JavaScript Modal -->
<script>
  const modal = document.getElementById("modal");
  const modalTitle = document.getElementById("modalTitle");
  const modalDesc = document.getElementById("modalDesc");

  function openModal(title, desc) {
    modalTitle.textContent = title;
    modalDesc.textContent = desc;
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  }

  function closeModal() {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  }
</script>
</body>
</html>
