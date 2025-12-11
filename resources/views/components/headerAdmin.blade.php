<header class="w-full bg-indigo-400 shadow-sm p-4 flex items-center justify-between flex-shrink-0">

  <div class="md:hidden">
    <button type="button" id="mobile-menu-button" class="text-gray-500 hover:text-gray-700 focus:outline-none p-2 rounded-md flex items-center gap-4">
      <div id="btnNav" class="space-y-1">
        <span class="block w-6 h-1 bg-white rounded-2xl"></span>
        <span class="block w-6 h-1 bg-white rounded-2xl"></span>
        <span class="block w-6 h-1 bg-white rounded-2xl"></span>
      </div>
      <h1 class="md:hidden block text-xl font-semibold text-white">Dashboard Admin</h1>
    </button>
  </div>

  <h1 class="hidden md:block text-2xl font-semibold text-white">Dashboard Admin</h1>

  <div class="flex items-center space-x-4">
    <button class="group p-2 rounded-full text-gray-500 hover:text-indigo-600 hover:bg-gray-100 transition duration-150">
      <i class="fas fa-bell w-5 h-5 text-white group-hover:text-indigo-500"></i>
    </button>
    <div class="flex items-center space-x-2">
      <div class="w-8 h-8 text-center leading-8 font-extrabold text-white bg-indigo-600 rounded-full object-cover">
        <!-- Cara ambil inisial name dari database admins -->
        {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
      </div>

      <span class="text-sm font-medium text-white hidden sm:inline">
        <!-- Cara ambil name admin dari database admins kolom name -->
        Halo, {{ Auth::guard('admin')->user()->name }}!
      </span>
    </div>
  </div>
</header>