<!DOCTYPE html>
<html lang="id">
@include('themes.head')
<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- Hero Section -->
  <section class="bg-blue-600 text-white text-center py-24 px-4" data-aos="fade-up">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">Sewa Mobil Mudah & Cepat</h2>
    <p class="text-lg md:text-xl mb-6">Jelajahi berbagai pilihan mobil terbaik untuk perjalanan Anda.</p>
    <a href="{{ route('mobil') }}" class="inline-block bg-white text-blue-600 px-6 py-2 rounded-full font-semibold hover:bg-gray-200 transition duration-300 ease-in-out">Lihat Mobil</a>
  </section>

  <!-- Daftar Mobil -->
  <main id="cars" class="py-20 px-6">
    <div class="max-w-6xl mx-auto">
      <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Mobil Tersedia</h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($data as $item)
        <!-- Card Mobil -->
        <div 
          class="bg-white shadow-lg rounded-xl overflow-hidden transform transition-all duration-500 ease-in-out" 
          data-aos="fade-up" 
          data-aos-delay="{{ $loop->index * 100 }}" 
          data-tilt 
          data-tilt-max="15" 
          data-tilt-speed="400" 
          data-tilt-scale="1.05"
        >
          <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="w-full h-48 object-cover transition-all duration-500 ease-in-out transform hover:scale-105">
          <div class="p-4">
            <h4 class="text-xl font-semibold text-center">{{ $item->nama }}</h4>
            <p class="text-sm text-gray-500 mb-3 text-center">Rp {{ number_format($item->harga_dengan_sopir, 0, ',', '.') }} / hari</p>
            <a href="{{ route('detail', $item->uuid) }}" 
              class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full text-center block transition duration-300 ease-in-out transform hover:scale-105">
              Detail
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 transition-opacity duration-300 ease-in-out">
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-md w-full modal-enter relative opacity-0">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-2xl">&times;</button>
      <h3 id="modalTitle" class="text-2xl font-bold mb-3">Judul Mobil</h3>
      <p id="modalDesc" class="text-gray-700">Deskripsi mobil...</p>
    </div>
  </div>

  <!-- Tentang Kami -->
  <section id="about" class="bg-white py-20 px-6" data-aos="fade-up">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-3xl font-bold text-blue-700 mb-6">Tentang Kami</h3>
      <p class="text-gray-700 text-lg leading-relaxed">
        RentalMobil.id telah menjadi solusi transportasi terpercaya sejak 2020. Kami menyediakan berbagai pilihan mobil dengan kondisi terbaik, harga terjangkau, dan layanan profesional. Kepuasan dan kenyamanan pelanggan adalah prioritas utama kami.
      </p>
    </div>
  </section>

  <!-- Hubungi via WhatsApp -->
  <section class="fixed bottom-6 right-6 z-50" data-aos="fade-up">
    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20sewa%20mobil."
      target="_blank"
      class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-full shadow-lg transition transform hover:scale-105">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.81 11.81 0 0 0 12 0C5.38 0 .03 5.34 0 11.95a11.89 11.89 0 0 0 1.61 6L0 24l6.27-1.63a11.89 11.89 0 0 0 5.66 1.45h.05c6.62 0 12-5.38 12-12a11.88 11.88 0 0 0-3.46-8.34zM12 21.54a9.49 9.49 0 0 1-4.84-1.31l-.35-.2-3.72.97.99-3.63-.23-.37a9.48 9.48 0 0 1-1.49-5.12c.01-5.23 4.27-9.48 9.5-9.48a9.44 9.44 0 0 1 6.72 2.8 9.45 9.45 0 0 1-6.58 16.34zm5.44-7.17c-.3-.15-1.78-.88-2.06-.98-.27-.1-.47-.15-.66.15-.19.3-.76.98-.93 1.18-.17.2-.34.22-.63.07s-1.23-.45-2.34-1.43a8.68 8.68 0 0 1-1.6-2c-.17-.3-.02-.46.13-.61.13-.14.3-.34.45-.5.15-.17.2-.3.3-.5.1-.2.05-.38-.03-.53-.08-.15-.66-1.58-.91-2.17-.24-.58-.49-.5-.67-.5-.17 0-.37-.01-.56-.01s-.53.08-.81.38c-.27.3-1.07 1.05-1.07 2.56 0 1.5 1.1 2.96 1.25 3.17.15.2 2.17 3.32 5.27 4.66.74.32 1.31.51 1.76.65.74.24 1.41.2 1.95.12.6-.1 1.78-.73 2.03-1.44.25-.71.25-1.33.18-1.44-.07-.1-.26-.16-.56-.3z"/>
      </svg>
      WhatsApp
    </a>
  </section>

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
      setTimeout(() => modal.classList.add("opacity-100"), 100);
    }

    function closeModal() {
      modal.classList.remove("opacity-100");
      setTimeout(() => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
      }, 300);
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>

  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });

    // Deteksi device
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

    // Inisialisasi VanillaTilt tergantung device
    VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
      max: 15,
      speed: 400,
      scale: 1.05,
      gyroscope: isMobile, // Aktifkan gyroscope untuk mobile
      gyroscopeMaxAngleX: 15,
      gyroscopeMaxAngleY: 15,
      reverse: false, // Tidak balik arah
    });
  </script>

</body>
</html>
