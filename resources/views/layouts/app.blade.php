<!DOCTYPE html>
<html lang="id" class="{{ session('theme', 'light') === 'dark' ? 'dark' : '' }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Rental Mobil Modern')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <style>

    
    body.light-mode {
      background-color: #f3f4f6;
      color: #111827;
    }
    body.dark-mode {
      background-color: #16233b;
      color: #000000;
    }
    body.dark-mode a {
      color: #ffffff;
      background-color: #16233b;
    }
    .toggle-icon {
      position: absolute;
      transition: transform 0.3s ease, opacity 0.3s ease;
      width: 24px;
      height: 24px;
    }
    .sun-icon {
      opacity: 1;
      transform: scale(1);
    }
    .moon-icon {
      opacity: 0;
      transform: scale(0);
    }
    body.dark-mode .sun-icon {
      opacity: 0;
      transform: scale(0);
    }
    body.dark-mode .moon-icon {
      opacity: 1;
      transform: scale(1);
    }

    body.dark-mode td {
      background-color: #ffffff;
      color: #000000;
    }

    body.dark-mode h1{
      color: #ffffff;
    }

    body.dark-mode .tambah-data {
      background-color: #2b4575;
    }
    
    body.dark-mode .tambah-data label{
      color: #ffffff;
    }

    body.dark-mode .tambah-data input{
      background-color: #2b4575;
      color: #ffffff;
    }

    body.dark-mode .tambah-data textarea{
      background-color: #2b4575;
      color: #ffffff;
    }

    body.dark-mode .kembali a{
      background-color: #2b4575;
    
    }
    body.dark-mode .kembali a:hover{
      background-color: #1f2fb8;
    }
    body.dark-mode .tambah-data a{
      background-color: #2b4575;
    }
    body.dark-mode .tambah-data a:hover{
      background-color: #1f2fb8;
    }
    body.dark-mode .modal{
      background-color: #1e283a;
    }
  </style>

  {{-- <script>
    if (localStorage.getItem('theme') === 'dark') {
      document.documentElement.classList.add('dark');
    }
  </script> --}}
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100">

  <div class="flex min-h-screen">
    @include('partials.sidebar')

    <main class="flex-1 p-6">
      @yield('content')
    </main>
  </div>

  <script>
    if (localStorage.getItem('theme') === 'dark') {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.add('light-mode');
    }

    function toggleDarkMode() {
      const body = document.body;
      const isDark = body.classList.contains('dark-mode');

      if (isDark) {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        localStorage.setItem('theme', 'light');
      } else {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
      }
    }
  </script>


  
@yield('scripts')
</body>
</html>
