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
    .sidebar {
      transition: transform 0.3s ease-in-out;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex h-screen overflow-hidden">
    
    <!-- SIDEBAR -->
    @include('components-user.sidebar')
    
    <div class="flex-1 flex flex-col overflow-y-auto">
      
      <!-- HEADER -->
      @include('components-user.header')
      
      <!-- CONTENT MAIN -->
      <main class="p-4 md:p-8 flex-grow bg-white">
        
        <div class="bg-indigo-100 p-6 rounded-xl shadow-lg border border-indigo-200 mb-8">
          <h2 class="text-2xl font-extrabold text-indigo-800 flex items-center">
            <i class="fa fa-hand-wave mr-3 text-3xl"></i> Selamat Datang, {{ Auth::guard('user')->user()->name }}!
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
                <p class="text-3xl font-extrabold text-gray-900 mt-1">0</p> 
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
                <p class="text-3xl font-extrabold text-gray-900 mt-1">0</p>
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
                <p class="text-3xl font-extrabold text-gray-900 mt-1">0</p>
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
                <p class="text-3xl font-extrabold text-gray-900 mt-1">0</p>
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
      
      @include('components-user.footer')
    </div>
  </div>
  
</body>
</html>