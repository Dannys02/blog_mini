<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard | {{ Auth::guard('user')->user()->name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    /* Styling tambahan untuk transisi sidebar */
    .sidebar {
      transition: transform 0.3s ease-in-out;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans">
  
  <div class="flex h-screen overflow-hidden">
    
    <div id="sidebar" class="sidebar fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-300 ease-in-out w-64 bg-white shadow-xl z-30 flex flex-col">
      <div class="p-6 border-b border-gray-200">
        <a href="#" class="text-2xl font-extrabold text-indigo-600 tracking-tight flex items-center">
            <i class="fa fa-tachometer-alt text-3xl mr-2"></i> User Panel
        </a>
      </div>
      
      <div class="p-6 flex items-center border-b border-gray-100">
        <div class="h-10 w-10 bg-indigo-200 rounded-full flex items-center justify-center text-indigo-800 font-semibold">
          {{ substr(Auth::guard('user')->user()->name, 0, 1) }}
        </div>
        <div class="ml-3">
          <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::guard('user')->user()->name }}</p>
          <p class="text-xs text-gray-500">User Biasa</p>
        </div>
      </div>
      
      <nav class="flex-grow p-4 space-y-2">
        <a href="#" class="flex items-center px-4 py-3 text-sm font-semibold text-white bg-indigo-600 rounded-lg shadow-md transition duration-300">
          <i class="fa fa-columns w-5 mr-3"></i> Dashboard
        </a>
        <a href="/user/articles" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
          <i class="fa fa-feather-alt w-5 mr-3"></i> Artikel Saya (CRUD)
        </a>
        <a href="/user/collection" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
          <i class="fa fa-bookmark w-5 mr-3"></i> Koleksi Artikel
        </a>
        <a href="/user/profile" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
          <i class="fa fa-user-circle w-5 mr-3"></i> Edit Profil
        </a>
        <a href="/user/comments" class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition duration-300">
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
    
    <div class="flex-1 flex flex-col overflow-y-auto">
      
      <header class="sticky top-0 bg-white shadow-md p-4 md:p-6 z-20">
        <div class="flex justify-between items-center">
          <button id="menu-toggle" class="md:hidden text-gray-500 hover:text-indigo-600 focus:outline-none p-2 rounded-lg">
            <i class="fa fa-bars text-xl"></i>
          </button>
          
          <h1 class="text-xl md:text-2xl font-bold text-gray-800">Dashboard</h1>
          
          <a href="/user/articles/create" class="flex items-center px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 hidden sm:flex">
            <i class="fa fa-plus-circle mr-2"></i> Tulis Artikel Baru
          </a>
        </div>
      </header>
      
      <main class="p-4 md:p-8 flex-grow">
        
        <div class="bg-indigo-100 p-6 rounded-xl shadow-lg border border-indigo-200 mb-8">
          <h2 class="text-2xl font-extrabold text-indigo-800 flex items-center">
            <i class="fa fa-hand-wave mr-3 text-3xl"></i> Selamat Datang Kembali, {{ Auth::guard('user')->user()->name }}!
          </h2>
          <p class="text-indigo-700 mt-2">
            Lihat statistik tulisan Anda dan kelola akun Anda di sini.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
          
          <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-indigo-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Artikel</p>
                <p class="text-3xl font-extrabold text-gray-900 mt-1">15</p> 
              </div>
              <div class="text-indigo-500 bg-indigo-100 p-3 rounded-full">
                <i class="fa fa-scroll text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-yellow-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Kata Ditulis</p>
                <p class="text-3xl font-extrabold text-gray-900 mt-1">12,450</p>
              </div>
              <div class="text-yellow-500 bg-yellow-100 p-3 rounded-full">
                <i class="fa fa-pen-nib text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-teal-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Komentar Baru</p>
                <p class="text-3xl font-extrabold text-gray-900 mt-1">3</p>
              </div>
              <div class="text-teal-500 bg-teal-100 p-3 rounded-full">
                <i class="fa fa-bell text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-pink-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Dilihat</p>
                <p class="text-3xl font-extrabold text-gray-900 mt-1">4,890</p>
              </div>
              <div class="text-pink-500 bg-pink-100 p-3 rounded-full">
                <i class="fa fa-eye text-xl"></i>
              </div>
            </div>
          </div>
        </div>

        <h3 class="text-2xl font-bold text-gray-800 mb-4 pt-4 border-t border-gray-200">Aksi Cepat</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <a href="/user/articles/create" class="bg-indigo-600 text-white p-6 rounded-xl shadow-lg hover:bg-indigo-700 transition duration-300 flex items-center justify-between">
            <div>
              <p class="text-xl font-bold">Tulis Artikel Baru</p>
              <p class="text-sm text-indigo-200">Mulai berbagi ide sekarang.</p>
            </div>
            <i class="fa fa-pen-square text-3xl opacity-75"></i>
          </a>
          
          <a href="/user/articles" class="bg-white border border-gray-200 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 flex items-center justify-between">
            <div>
              <p class="text-xl font-bold text-gray-800">Kelola Artikel</p>
              <p class="text-sm text-gray-500">Edit, hapus, dan publikasikan.</p>
            </div>
            <i class="fa fa-book-open text-3xl text-indigo-500 opacity-75"></i>
          </a>
          
          <a href="/user/profile" class="bg-white border border-gray-200 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 flex items-center justify-between">
            <div>
              <p class="text-xl font-bold text-gray-800">Pengaturan Akun</p>
              <p class="text-sm text-gray-500">Ganti nama, email, atau password.</p>
            </div>
            <i class="fa fa-cogs text-3xl text-indigo-500 opacity-75"></i>
          </a>
        </div>
      </main>

      <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
        <p>&copy; {{ date('Y') }} Dashboard User. Didesain dengan Tailwind CSS.</p>
      </footer>
      
    </div>
  </div>
  
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('body');

    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
      // Menambahkan/menghapus kelas overflow-hidden pada body saat sidebar terbuka
      mainContent.classList.toggle('overflow-hidden');
    });

    // Menutup sidebar ketika di luar sidebar diklik (hanya di mobile)
    document.addEventListener('click', (event) => {
      const isClickInsideSidebar = sidebar.contains(event.target);
      const isClickOnToggle = menuToggle.contains(event.target);
      
      if (!isClickInsideSidebar && !isClickOnToggle && window.innerWidth < 768 && !sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.add('-translate-x-full');
        mainContent.classList.remove('overflow-hidden');
      }
    });

    // Menutup sidebar jika di-resize ke desktop
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768 && sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.remove('-translate-x-full');
        mainContent.classList.remove('overflow-hidden');
      }
    });
  </script>
</body>
</html>
