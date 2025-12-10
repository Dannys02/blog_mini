<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard | Blog Mini</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 flex h-screen overflow-hidden">

  <div id="sidebar" class="fixed h-screen left-[-100%] md:relative md:left-0 w-64 bg-white shadow-xl flex-shrink-0 flex flex-col transition-all duration-300 z-[30]">

    <div class="bg-white p-6 border-b border-gray-100 flex items-center justify-center">
      <i class="fas fa-feather-alt text-3xl text-indigo-600 mr-2"></i>
      <span class="text-xl font-extrabold text-gray-800 tracking-wide">BLOG ADMIN</span>
    </div>

    <nav class="bg-white flex-grow p-4 space-y-2 overflow-y-auto sidebar-nav">

      <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3">Main</h3>

      <a href="#" class="flex items-center p-3 rounded-lg text-white bg-indigo-600 font-medium hover:bg-indigo-700 transition duration-150">
        <i class="fas fa-home w-5 h-5 mr-3"></i>
        Dashboard
      </a>

      <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3 pt-2 border-t border-gray-100">Content</h3>

      <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 font-medium transition duration-150">
        <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
        Posts
      </a>
      <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 font-medium transition duration-150">
        <i class="fas fa-comments w-5 h-5 mr-3"></i>
        Komentar
      </a>
      <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 font-medium transition duration-150">
        <i class="fas fa-user w-5 h-5 mr-3"></i>
        Daftar Pengguna
      </a>

      <h3 class="text-xs font-semibold uppercase text-gray-400 mt-4 mb-2 px-3 pt-2 border-t border-gray-100">Settings</h3>

      <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 font-medium transition duration-150">
        <i class="fas fa-users-cog w-5 h-5 mr-3"></i>
        Users & Roles
      </a>
      <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 font-medium transition duration-150">
        <i class="fas fa-cogs w-5 h-5 mr-3"></i>
        General Settings
      </a>

      <div class="p-4 border-t border-gray-100">
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

  <div class="flex-1 flex flex-col overflow-hidden">

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
          <div class="w-8 h-8 text-center leading-8 font-extrabold text-white bg-indigo-600 rounded-full object-cover">A</div>
          <span class="text-sm font-medium text-white hidden sm:inline">Halo, Admin!</span>
        </div>
      </div>
    </header>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Total Artikel
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                0
              </p>
            </div>
            <div class="p-3 bg-indigo-100 rounded-full text-indigo-600">
              <i class="fas fa-book-open text-xl"></i>
            </div>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Komentar
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                0
              </p>
            </div>
            <div class="p-3 bg-green-100 rounded-full text-green-600">
              <i class="fas fa-comment-dots text-xl"></i>
            </div>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Daftar pengguna
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                0
              </p>
            </div>
            <div class="p-3 bg-yellow-100 rounded-full text-yellow-600">
              <i class="fas fa-users text-xl"></i>
            </div>
          </div>
        </div>

      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
        <div class="p-6 flex justify-between items-center border-b border-gray-100">
          <h2 class="text-xl font-semibold text-gray-800">Postingan Blog Terbaru</h2>
          <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 flex items-center">
            Semua Posts <i class="fas fa-arrow-right ml-1 text-xs"></i>
          </a>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  Tips Terbaru Optimasi SEO Blog Tahun 2025
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                    SEO
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2.5K</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                  <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Published
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                  <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  5 Resep Kopi Ala Barista yang Bisa Dibuat di Rumah
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Lifestyle
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1.8K</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                  <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                    Draft
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                  <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>
  </div>

  <script>
    const sidebar = document.getElementById("sidebar");
    document.getElementById("btnNav").addEventListener("click", function () {
    sidebar.classList.toggle("left[-100%]")
    sidebar.classList.toggle("left-0");
    });

    document.addEventListener("click", function (e) {
    if(!sidebar.contains(e.target) && !btnNav.contains(e.target)) {
      sidebar.classList.remove("left-0");
      sidebar.classList.add("left-[-100%]");
    }
    });
  </script>
</body>
</html>