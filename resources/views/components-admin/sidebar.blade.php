<div id="sidebar" class="fixed h-screen left-[-100%] md:relative md:left-0 w-64 bg-white shadow-xl flex-shrink-0 flex flex-col transition-all duration-300 z-[30]">

  <div class="bg-white p-6 border-b border-gray-200 flex items-center justify-center">
    <i class="fas fa-feather-alt text-3xl text-indigo-600 mr-2"></i>
    <span class="text-xl font-extrabold text-gray-800 tracking-wide">BLOG ADMIN</span>
  </div>

  <nav class="bg-white flex-grow p-4 space-y-1 overflow-y-auto sidebar-nav">

    <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3">UTAMA</h3>

    <a href="/admin/dashboard" class="flex items-center p-3 rounded-lg text-gray-700 font-semibold hover:text-indigo-600 hover:bg-indigo-50 transition duration-150">
      <i class="fas fa-home w-5 h-5 mr-3"></i>
      Dashboard
    </a>

    <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3 pt-2 border-t border-gray-100">Manajemen Konten</h3>

    <a href="/admin/post/index" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
      <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
      Posts
    </a>
    <a href="/admin/comment-user" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
      <i class="fas fa-comments w-5 h-5 mr-3"></i>
      Komentar
    </a>
    <a href="/admin/list-user" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
      <i class="fas fa-users w-5 h-5 mr-3"></i>
      Daftar Pengguna
    </a>

    <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3 pt-2 border-t border-gray-100">Pengaturan & Admin</h3>

    <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
      <i class="fas fa-user-shield w-5 h-5 mr-3"></i>
      Admin & Role
    </a>
    <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium transition duration-150">
      <i class="fas fa-cogs w-5 h-5 mr-3"></i>
      Pengaturan Umum
    </a>

    <div class="p-4 mt-8">
      <form action="/logout" method="post" class="w-full">
        @csrf
        <button type="submit" class="w-full flex items-center justify-center p-3 rounded-lg text-red-600 bg-red-50 hover:bg-red-100 font-medium transition duration-150 focus:outline-none">
          <i class="fas fa-sign-out-alt w-5 h-5 mr-2"></i>
          Logout
        </button>
      </form>
    </div>

  </nav>

</div>