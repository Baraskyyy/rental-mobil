@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Header -->
<div class="kembali mb-6">
  <a href="/data" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow transition duration-300 ease-in-out">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
    <span>Kembali</span>
  </a>
</div>

<div class="flex justify-between items-start flex-wrap gap-4 mb-6">
  <div>
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Form Tambah Data Mobil</h1>
  </div>
</div>

<!-- Form -->
<div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-lg mx-auto">
  <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Tambah Mobil</h2>

  <form action="{{ route('tambah_data.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
      <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama Mobil</label>
      <input type="text" name="nama" id="nama" class="mt-1 block w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white" required>
    </div>

    <div>
      <label for="gambar" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Gambar Mobil</label>
      <input type="file" name="gambar" id="gambar" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:bg-gray-700 dark:text-white dark:file:bg-blue-900 dark:file:text-white">
    </div>

    <div>
      <label for="harga_tanpa_sopir" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Harga Tanpa Sopir</label>
      <input type="number" name="harga_tanpa_sopir" id="harga_tanpa_sopir" class="mt-1 block w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white" required>
    </div>

    <div>
      <label for="harga_dengan_sopir" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Harga Dengan Sopir</label>
      <input type="number" name="harga_dengan_sopir" id="harga_dengan_sopir" class="mt-1 block w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white" required>
    </div>

    

    <div>
      <label for="deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Deskripsi Mobil</label>
      <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 block w-full px-4 py-2 border rounded-md dark:bg-gray-700 dark:text-white"></textarea>
    </div>

    <div class="pt-4 flex justify-end gap-2">
      <button type="reset" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg">Batal</button>
      <button type="submit" class="bg-green-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
        Simpan Mobil
      </button>
    </div>
  </form>
</div>
@endsection
  