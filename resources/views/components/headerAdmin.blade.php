<header class="w-full bg-white shadow-md p-4 flex items-center justify-between flex-shrink-0 sticky top-0 z-20">

  <div class="flex items-center">
    <button type="button" id="mobile-menu-button" class="md:hidden text-gray-500 hover:text-indigo-600 focus:outline-none p-2 rounded-lg transition duration-150">
      <div id="btnNav" class="space-y-1">
        <span class="block w-6 h-1 bg-gray-600 rounded-2xl"></span>
        <span class="block w-6 h-1 bg-gray-600 rounded-2xl"></span>
        <span class="block w-6 h-1 bg-gray-600 rounded-2xl"></span>
      </div>
    </button>
    <h1 class="text-xl md:text-2xl font-bold text-gray-800 ml-4 md:ml-0">Dashboard Admin</h1>
  </div>

  <div class="flex items-center space-x-4">
    <button class="group p-2 rounded-full text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 transition duration-150">
      <i class="fas fa-bell w-5 h-5 text-gray-500 group-hover:text-indigo-600"></i>
    </button>
    
    <div class="flex items-center space-x-3 cursor-pointer">
      <div class="w-8 h-8 text-center leading-8 font-extrabold text-white bg-indigo-600 rounded-full object-cover shadow-md">
        {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
      </div>

      <span class="text-sm font-medium text-gray-800 hidden sm:inline">
        Halo, {{ Auth::guard('admin')->user()->name }}!
      </span>
    </div>
  </div>
</header>
