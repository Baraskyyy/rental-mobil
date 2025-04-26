<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Modern</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/@heroicons/vue@2.0.16/24/outline/heroicons.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-200 min-h-screen flex items-center justify-center px-4">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 transition-all duration-500 animate-fade-in">
    <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Selamat Datang 👋</h2>

    <form class="space-y-4">
      <div class="relative">
        <input
          type="email"
          placeholder="Email"
          class="w-full px-4 py-3 pl-10 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          required
        />
        <svg class="w-5 h-5 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0a4 4 0 01-8 0m8 0a4 4 0 00-8 0" />
        </svg>
      </div>

      <div class="relative">
        <input
          type="password"
          placeholder="Password"
          class="w-full px-4 py-3 pl-10 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          required
        />
        <svg class="w-5 h-5 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c.895 0 1.618.723 1.618 1.618v.764a1.618 1.618 0 01-3.236 0v-.764A1.618 1.618 0 0112 11zm0-9a9 9 0 100 18 9 9 0 000-18z" />
        </svg>
      </div>

      <button
        type="submit"
        class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-all font-semibold"
      >
        Masuk
      </button>

      <p class="text-sm text-center text-gray-500">
        Belum punya akun? <a href="#" class="text-blue-600 hover:underline">Daftar di sini</a>
      </p>
    </form>
  </div>

  <style>
    @keyframes fade-in {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fade-in 0.6s ease-out;
    }
  </style>
</body>
</html>
