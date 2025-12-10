<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Website Blog Dannys Martha F</title>
  <style>
    * {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-white min-h-screen font-sans">
  @include('components.navbar')
  <div id="overlay" class="z-[20] fixed inset-0 bg-black opacity-50 hidden transition-all duration-300"></div>

  <div id="main">
    <div class="pt-[120px] pb-24 text-center bg-indigo-600">
      <i class="fa fa-home text-white text-3xl mb-2"></i>
      <h1 class="text-white text-2xl font-bold">Selamat datang di Website Blog Mini</h1>
      <p class="text-gray-200">
        Tulis konten tentang sesuatu di sini :)
      </p>
    </div>

    <section id="artikel" class="text-2xl font-bold text-center bg-white p-6">
      <h1 class="mb-4">Artikel</h1>
      <h3 class="text-lg text-start mb-3 text-gray-800">Kumpulan artikel publik :</h3>
      <div class="bg-white rounded-2xl shadow-2xl py-6 px-2">
        <div class="p-5 grid grid-cols-1 gap-4 md:grid-cols-2">
          @forelse ($posts as $p)
          <div class="p-5 bg-white shadow-lg rounded-2xl border border-gray-200 mx-auto transition duration-300 hover:shadow-xl h-fit">

            <div class="border-b border-gray-300 mb-4 w-full pb-3">
              <h4 class="font-bold text-xl text-gray-800 text-start tracking-tight">
                {{ $p->title }}
              </h4>
              <p class="text-sm text-gray-500 text-start mt-1">
                Dibuat : {{ $p->created_at->format("d F Y") }}
              </p>
            </div>

            <div class="mb-2">
              <h4 class="font-semibold text-sm text-gray-700 text-start mb-2 uppercase tracking-wide">Isi Konten :</h4>
              <p class="text-gray-800 text-start text-sm border border-gray-300 bg-gray-50 rounded-lg p-3 leading-relaxed">
                {{ $p->content }}
              </p>
            </div>

            <div class="flex justify-start mt-4">
              <a href="/post/komentar/{{ $p->id }}" class="inline-flex justify-center items-center px-4 py-2 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-full transition duration-300 shadow-md shadow-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <i class="fa fa-comment mr-2"></i> komentar...
              </a>
            </div>
          </div>

          @empty
          <p class="text-center my-2">
            Artikel tidak ada.
          </p>
          @endforelse
        </div>
      </div>
    </section>
  </div>

  <ul id="navbarPhone" class="md:hidden w-full fixed bottom-[-100%] flex flex-col justify-center items-center py-4 bg-white shadow-black shadow-2xl space-y-6 transition-all duration-300 ease-in-out z-[30]">
    <li class="w-full flex px-6">
      <a href="#" class="group text-black bg-white text-center w-full transition-all duration-300 hover:bg-indigo-600 hover:text-white py-2 px-4 rounded-3xl">
        <i class="fa fa-home text-lg mr-1 text-black group-hover:text-white transition-all"></i> Home
      </a>
    </li>

    <li class="w-full flex px-6">
      <a href="#artikel" class="group text-black bg-white text-center w-full transition-all duration-300 hover:bg-indigo-600 hover:text-white py-2 px-4 rounded-3xl">
        <i class="fa fa-newspaper text-lg mr-1 text-black group-hover:text-white transition-all"></i> Artikel
      </a>
    </li>

    <li class="w-full flex px-6">
      <a href="#about" class="group text-black bg-white text-center w-full transition-all duration-300 hover:bg-indigo-600 hover:text-white py-2 px-4 rounded-3xl">
        <i class="fa fa-info-circle text-lg mr-1 text-black group-hover:text-white transition-all"></i> Tentang
      </a>
    </li>

    <li class="w-full flex px-6">
      <a href="#contact" class="group text-black bg-white text-center w-full transition-all duration-300 hover:bg-indigo-600 hover:text-white py-2 px-4 rounded-3xl">
        <i class="fa fa-envelope text-lg mr-1 text-black group-hover:text-white transition-all"></i> Kontak
      </a>
    </li>

    <li class="w-full flex px-6">
      <a href="/login" class="w-full border-2 border-indigo-500 text-center py-2 px-4 bg-indigo-600 text-white rounded-xl">
        <i class="fa fa-sign-in"></i> Login
      </a>
    </li>

    <li class="w-full flex px-6">
      <a href="/register" class="w-full text-black text-center py-2 px-4 bg-transparent border-2 border-indigo-300 rounded-xl transition-all duration-300 hover:border-indigo-500 hover:bg-indigo-600 hover:text-white">
        <i class="fa fa-user-plus"></i> Daftar
      </a>
    </li>
  </ul>

  <script>
    const btnNav = document.getElementById("btnNav");
    const navPhone = document.getElementById("navbarPhone");
    const overlay = document.getElementById("overlay");

    btnNav.addEventListener("click", function () {
    navPhone.classList.toggle("bottom-[-100%]");
    navPhone.classList.toggle("bottom-0");
    overlay.classList.toggle("hidden");
    });

    document.addEventListener("click", function (e) {
    if (!navPhone.contains(e.target) && !btnNav.contains(e.target)) {
    navPhone.classList.add("bottom-[-100%]");
    navPhone.classList.remove("bottom-0");
    overlay.classList.add("hidden");
    }
    });
  </script>
</body>
</html>