<aside class="w-64 shadow-md hidden md:block border-r border-blue-500 dark:border-blue-300">
    <div class="p-6 flex items-center justify-between">
      <h2 class="text-xl font-bold text-blue-600 dark:text-blue-400">RentalMobil.id</h2>
      @include('partials.darkmode-toggle')
    </div>
  
    @php
      $menus = [
        ['label' => '🏠 Dashboard', 'route' => 'dashboard'],
        ['label' => '🚗 Mobil', 'route' => 'data'],
        ['label' => '📋 Pesanan', 'route' => 'pesanan'],
      ];
      $current = Route::currentRouteName();
    @endphp
  
    <nav class="px-6 pt-4 space-y-2">
      @foreach ($menus as $menu)
        <a href="{{ route($menu['route']) }}"
           class="block py-2 px-4 font-medium rounded transition-all duration-300 transform 
           {{ $current === $menu['route']
              ? 'bg-blue-100 text-blue-700 border border-blue-500 dark:bg-blue-800 dark:text-white scale-105'
              : 'border border-transparent hover:border-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900 text-gray-700 dark:text-gray-300 hover:translate-y-[-2px]' }}">
          {{ $menu['label'] }}
        </a>
      @endforeach
    </nav>
  </aside>
  