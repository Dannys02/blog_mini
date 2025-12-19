<div id="sidebar" class="sidebar fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-300 ease-in-out w-64 bg-white shadow-xl z-30 flex flex-col">
  <div class="p-6 border-b border-gray-200">
    <a href="#" class="text-2xl font-extrabold text-indigo-600 tracking-tight flex items-center">
      <i class="fa fa-tachometer-alt text-3xl mr-2"></i> Panel Pengguna
    </a>
  </div>

  <div class="p-6 flex items-center border-b border-gray-100">
    <div class="h-10 w-10 bg-indigo-200 rounded-full flex items-center justify-center text-indigo-800 font-semibold">
      {{ substr(Auth::guard('user')->user()->name, 0, 1) }}
    </div>
    <div class="ml-3">
      <p class="text-sm font-bold text-gray-900 truncate">
        {{ Auth::guard('user')->user()->name }}
      </p>
      <p class="text-xs text-gray-500">
        Pengguna
      </p>
    </div>
  </div>

  <nav class="flex-grow p-4 space-y-2">
    <a href="/dashboard" class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
      <i class="fa fa-columns w-5 mr-3"></i> Dashboard
    </a>
    <a href="/user/post/create" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
      <i class="fa fa-feather-alt w-5 mr-3"></i> Buat Artikel
    </a>
    <a href="/user/post/index" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
      <i class="fa fa-bookmark w-5 mr-3"></i> Koleksi Artikel
    </a>
    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
      <i class="fa fa-user-circle w-5 mr-3"></i> Edit Profil
    </a>
    <a href="/user/post/comment" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
      <i class="fa fa-comments w-5 mr-3"></i> Komentar Saya
    </a>
  </nav>

  <div class="p-4 border-t border-gray-200 mt-auto">
    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="w-full flex items-center justify-center py-2 px-4 text-sm font-medium text-red-600 bg-red-100 rounded-lg hover:bg-red-200 transition duration-300">
        <i class="fa fa-sign-out-alt mr-2"></i> Logout
      </button>
    </form>
  </div>
</div>