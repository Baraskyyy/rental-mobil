  @extends('layouts.app')

  @section('title', 'Dashboard')

  @section('content')

    <!-- Header (Judul + Tombol) -->
    <div class="flex justify-between items-start flex-wrap gap-4 mb-6">
      <!-- Judul dan Deskripsi -->
      <div>
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Data Mobil</h1>
      </div>

      <!-- Tombol Tambah Data -->
      <div class="tambah-data">
        <button id="openModal"
          class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow inline-flex items-center transition duration-300 ease-in-out">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 4v16m8-8H4"></path>
          </svg>
          Tambah Data
        </button>
      </div>
    </div>

      <!-- Modal Tambah Data Mobil -->
      <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center hidden z-50">
        <div class="tambah-data modal bg-white dark:bg-black-800 p-8 rounded-lg shadow-lg w-full max-w-lg">
          <h2 class="text-xl font-semibold text-white dark:text-gray-100 mb-4">Tambah Mobil Baru</h2>

          <form action="{{ route('tambah_data.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
              <label for="nama" class="block text-sm font-medium text-black dark:text-gray-200">Nama Mobil</label>
              <input type="text" name="nama" id="nama" class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>

            <div class="upload">
              <label for="gambar" class="gambar-mobil block text-sm font-medium text-black dark:text-gray-200 mb-1">Gambar Mobil</label>
              <label for="gambar" class="upload-gambar flex items-center gap-2 cursor-pointer bg-blue-50 text-black px-4 py-2 rounded-md w-fit text-sm font-semibold hover:bg-blue-100 dark:bg-blue-900 dark:text-white hover:dark:bg-blue-800">
                <!-- Icon Upload -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M16 12l-4-4m0 0l-4 4m4-4v12" />
                </svg>
                Pilih Gambar
                <input type="file" name="gambar" id="gambar" accept="image/*" class="hidden">
              </label>
            </div>
              
            

            <div>
              <label for="status" class="block text-sm font-medium text-black dark:text-gray-200">Status Mobil</label>
              <select name="status" id="status" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-white">
                <option value="" disabled selected>Pilih status...</option>
                <option value="tersedia">✅ Tersedia</option>
                <option value="tidak_tersedia">❌ Tidak Tersedia</option>
                <option value="dalam_perbaikan">🛠️ Dalam Perbaikan</option>
              </select>
            </div>

            <div>
              <label for="harga_tanpa_sopir" class="block text-sm font-medium text-black dark:text-gray-200">Harga Tanpa Sopir</label>
              <input type="number" name="harga_tanpa_sopir" id="harga_tanpa_sopir" class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>

            <div>
              <label for="harga_dengan_sopir" class="block text-sm font-medium text-black dark:text-gray-200">Harga Dengan Sopir</label>
              <input type="number" name="harga_dengan_sopir" id="harga_dengan_sopir" class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>

            <div>
              <label for="deskripsi" class="block text-sm font-medium text-black dark:text-gray-200">Deskripsi Mobil</label>
              <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 dark:bg-gray-700 dark:text-white"></textarea>
            </div>

            <div class="pt-4 flex justify-end gap-2">
              <button type="button" id="closeModal" class="bg-gray-500 hover:bg-gray-600 text-black font-bold py-2 px-6 rounded-lg">Batal</button>
              <button type="submit" class="bg-green-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                Simpan Mobil
              </button> 
            </div>
          </form>
        </div>
      </div>

    <!-- Tabel Data Mobil -->
<div class="random-bg dark:bg-gray-800 shadow rounded-lg overflow-x-auto">
  <table class="min-w-full text-left">
    <thead class="bg-blue-600 dark:bg-blue-700 text-white">
      <tr>
        <th class="text-center py-3 px-4">Merk Mobil</th>
        <th class="text-center py-3 px-4">Harga (Sopir)</th>
        <th class="text-center py-3 px-4">Harga (Tanpa Sopir)</th>
        <th class="text-center py-3 px-4">Status</th>
        <th class="text-center py-3 px-4">Aksi</th>
      </tr>
    </thead>
    <tbody class="text-gray-700 dark:text-gray-200">
      @foreach ($data as $data)
        <tr class="border-b border-black dark:border-gray-600">
          <td class="text-center py-3 px-4">{{ $data->nama }}</td>
          <td class="text-center py-3 px-4">{{ $data->harga_dengan_sopir }}</td>
          <td class="text-center py-3 px-4">{{ $data->harga_tanpa_sopir }}</td>
          <td class="text-center py-3 px-4">
            @if($data->status == 'tersedia')
              <span class="bg-green-700 text-white text-xs font-semibold px-2 py-1 rounded">Tersedia</span>
            @elseif($data->status == 'tidak_tersedia')
              <span class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">Tidak Tersedia</span>
            @elseif($data->status == 'dalam_perbaikan')
              <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded">Dalam Perbaikan</span>
            @else
              <span class="bg-gray-500 text-white text-xs font-semibold px-2 py-1 rounded">Tidak Diketahui</span>
            @endif
          </td>
          <td class="text-center py-3 px-4">
            <div class="flex items-center gap-3 justify-center">
              <a href="{{ route('data.edit', $data->id) }}" title="Edit"
                 class="bg-blue-100 hover:bg-blue-200 text-blue-600 rounded-full p-2 transition inline-flex items-center justify-center">
                <!-- Ikon Edit -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 4h2a2 2 0 012 2v2m2 2l-8 8H5v-4l8-8z" />
                </svg>
              </a>
              <button type="button" title="Hapus" onclick="hapusData({{ $data->id }})"
                      class="bg-red-100 hover:bg-red-200 text-red-600 rounded-full p-2 transition inline-flex items-center justify-center">
                <!-- Ikon Hapus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m2 0a2 2 0 00-2-2H9a2 2 0 00-2 2h10z" />
                </svg>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


  @endsection

  @section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('modal');
      const openModalButton = document.getElementById('openModal');
      const closeModalButton = document.getElementById('closeModal');

      openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
      });

      closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
      });
    });
  </script>
  @endsection
