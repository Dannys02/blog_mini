<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/htmx.org@1.9.10"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Website Blog</title>
  <style>
    * {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen font-sans text-gray-800">

  @include('components-app.navbar')

  <div id="overlay" class="z-[20] fixed inset-0 bg-black opacity-50 hidden transition-all duration-300"></div>

  <div id="main">

    <header class="pt-40 pb-28 text-center bg-indigo-600 shadow-xl">
      <div class="container mx-auto px-4">
        <i class="fa fa-pencil-ruler text-indigo-200 text-5xl mb-4 animate-bounce-slow"></i>
        <h1 class="text-white text-4xl sm:text-5xl font-extrabold tracking-tight mb-2">
          Selamat Datang di Blog Mini
        </h1>
        <p class="text-indigo-200 text-lg max-w-2xl mx-auto">
          Tempat berbagi pemikiran, ide, dan cerita. Mari kita menulis konten yang bermakna!
        </p>
      </div>
    </header>

    <section id="artikel" class="py-16 md:py-24 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">
          <span class="text-indigo-600">Artikel</span> Terbaru
        </h2>

        <h3 class="text-xl font-semibold text-start text-gray-700 mb-6 border-l-4 border-indigo-600 pl-3">
          <i class="fa fa-list-alt mr-2 text-indigo-500"></i> Kumpulan Artikel Publik
        </h3>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          @forelse ($posts as $p)
          <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 transition duration-300 hover:shadow-2xl hover:border-indigo-200 h-full flex flex-col">
            <div class="flex-grow">
              <div class="border-b border-gray-200 mb-4 pb-4">
                <h4 class="font-bold text-xl text-gray-900 tracking-tight leading-snug mb-2">
                  {{ $p->title }}
                </h4>
                <p class="text-xs text-gray-500 mb-1 font-medium">
                  <i class="fa fa-calendar-alt mr-1"></i> Dibuat: {{ $p->created_at->format("d F Y") }}
                </p>
                <p class="text-xs text-gray-500 font-medium">
                  Oleh : <span class="text-indigo-600">{{ $p->user->name ?? "Admin" }}</span>
                </p>
              </div>

              <div class="mb-4">
                <h4 class="font-semibold text-sm text-indigo-600 mb-2 uppercase tracking-wider">Konten Singkat:</h4>
                <p class="text-gray-700 text-sm bg-indigo-50 rounded-lg p-3 leading-relaxed border border-indigo-200 overflow-hidden max-h-32">
                  {{ $p->content }}
                </p>
              </div>
            </div>

            <div class="mt-4 pt-4 border-t border-gray-100">
              <a href="/post/komentar/{{ $p->id }}" class="inline-flex justify-center items-center px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-full transition duration-300 shadow-md shadow-indigo-500/50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <i class="fa fa-comment mr-2"></i> Baca & Komentar
              </a>
            </div>
          </div>
          @empty
          <div class="md:col-span-3 text-center py-12 bg-indigo-50 rounded-lg
          border-dashed border-2 border-indigo-300">
            <i class="fa fa-exclamation-circle text-4xl text-indigo-400 mb-3"></i>
            <p class="text-lg text-indigo-500 font-medium">
              Artikel tidak tersedia saat ini.
            </p>
          </div>
          @endforelse
        </div>
        
      </div>
    </section>

    <section id="tentang" class="py-16 md:py-24 bg-gray-50">
      <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">
          <span class="text-indigo-600">Tentang</span> Kami
        </h2>
        <div class="bg-white p-8 sm:p-12 rounded-xl shadow-lg border border-gray-100 flex flex-col md:flex-row items-center gap-8">
          <div class="text-center md:text-left">
            <i class="fa fa-lightbulb text-5xl text-indigo-500 mb-4"></i>
            <p class="text-lg text-gray-700 leading-relaxed">
              Website Blog Mini ini dibangun oleh Dannys Martha F sebagai wadah sederhana untuk berekspresi dan berbagi pengetahuan. Kami percaya bahwa berbagi ide, sekecil apapun, dapat menciptakan dampak positif. Fokus kami adalah konten yang ringkas, mudah dibaca, dan bermanfaat.
            </p>
            <p class="mt-4 text-sm text-gray-500 italic">
              "Kekuatan sebuah ide terletak pada pembagiannya."
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="kontak" class="py-16 md:py-24 bg-white">
      <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">
          <span class="text-indigo-600">Hubungi</span> Kami
        </h2>
        <div class="bg-gray-50 p-8 sm:p-12 rounded-xl shadow-lg border border-gray-100">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
            <div class="p-6 bg-white rounded-lg border border-indigo-200 shadow-md">
              <i class="fa fa-envelope text-3xl text-indigo-600 mb-3"></i>
              <h4 class="text-xl font-semibold text-gray-800">Email</h4>
              <p class="text-gray-600 mt-1">
                komputerk858@gmail.com
              </p>
              <a href="mailto:dannys.martha.f@example.com" class="mt-3 inline-block text-sm font-medium text-indigo-600 hover:text-indigo-800">
                Kirim Pesan <i class="fa fa-arrow-right ml-1 text-xs"></i>
              </a>
            </div>
            <div class="p-6 bg-white rounded-lg border border-indigo-200 shadow-md">
              <i class="fa fa-share-alt text-3xl text-indigo-600 mb-3"></i>
              <h4 class="text-xl font-semibold text-gray-800">Media Sosial</h4>
              <p class="text-gray-600 mt-1">
                Temukan kami di platform favorit Anda.
              </p>
              <div class="mt-3 space-x-4">
                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition duration-300"><i class="fab fa-instagram text-xl"></i></a>
                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition duration-300"><i class="fab fa-tiktok text-xl"></i></a>
                <a href="#" class="text-indigo-500 hover:text-indigo-700 transition duration-300"><i class="fab fa-whatsapp text-xl"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  @include('components-app.footer')

  <div id="navbarPhone" class="md:hidden w-full fixed bottom-[-100%] flex flex-col p-6 bg-white shadow-[0_-5px_15px_rgba(0,0,0,0.1)] space-y-4 transition-all duration-300 ease-in-out z-[30] rounded-t-2xl">
    <h3 class="text-xl font-bold text-gray-900 text-center border-b pb-3 border-gray-200">Navigasi</h3>
    <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:text-white bg-white hover:bg-indigo-600 rounded-lg transition duration-300 font-medium group">
      <i class="fa fa-home text-lg mr-3 text-indigo-500 group-hover:text-white transition-all w-5"></i> Beranda
    </a>
    <a href="#artikel" class="flex items-center px-4 py-3 text-gray-700 hover:text-white bg-white hover:bg-indigo-600 rounded-lg transition duration-300 font-medium group">
      <i class="fa fa-newspaper text-lg mr-3 text-indigo-500 group-hover:text-white transition-all w-5"></i> Artikel
    </a>
    <a href="#tentang" class="flex items-center px-4 py-3 text-gray-700 hover:text-white bg-white hover:bg-indigo-600 rounded-lg transition duration-300 font-medium group">
      <i class="fa fa-info-circle text-lg mr-3 text-indigo-500 group-hover:text-white transition-all w-5"></i> Tentang
    </a>
    <a href="#kontak" class="flex items-center px-4 py-3 text-gray-700 hover:text-white bg-white hover:bg-indigo-600 rounded-lg transition duration-300 font-medium group">
      <i class="fa fa-envelope text-lg mr-3 text-indigo-500 group-hover:text-white transition-all w-5"></i> Kontak
    </a>

    <div class="pt-4 border-t border-gray-200 space-y-3">
      <a href="/login" class="w-full flex justify-center items-center py-3 px-4 bg-indigo-600 text-white rounded-lg font-bold shadow-md hover:bg-indigo-700 transition duration-300">
        <i class="fa fa-sign-in-alt mr-2"></i> Login
      </a>
      <a href="/register" class="w-full flex justify-center items-center py-3 px-4 bg-white text-indigo-600 border border-indigo-600 rounded-lg font-bold shadow-md hover:bg-indigo-50 transition duration-300">
        <i class="fa fa-user-plus mr-2"></i> Daftar
      </a>
    </div>
  </div>

  <script>
    const btnNav = document.getElementById("btnNav");
    const navPhone = document.getElementById("navbarPhone");
    const overlay = document.getElementById("overlay");

    function toggleMenu() {
      navPhone.classList.toggle("bottom-[-100%]");
      navPhone.classList.toggle("bottom-0");
      overlay.classList.toggle("hidden");
      document.body.classList.toggle("overflow-hidden"); // Tambahkan ini untuk mencegah scroll body saat menu terbuka
    }

    btnNav.addEventListener("click", toggleMenu);
    overlay.addEventListener("click", toggleMenu);

    navPhone.querySelectorAll('a[href^="#"], a[href^="/login"], a[href^="/register"]').forEach(link => {
    link.addEventListener('click', () => {
    if (!navPhone.classList.contains("bottom-[-100%]")) {
    toggleMenu();
    }
    });
    });

    document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && !navPhone.classList.contains("bottom-[-100%]")) {
    toggleMenu();
    }
    });

  </script>
</body>
</html>