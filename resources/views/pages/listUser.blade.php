<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 flex h-screen font-sans">
  @include('components.sidebar')

  <div class="flex-1 flex flex-col overflow-hidden">

    @include('components.header')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-4 md:p-8">

      <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-gray-900 flex items-center mb-2">
          <i class="fas fa-users text-indigo-600 mr-3"></i> Daftar Pengguna
        </h2>
        <p class="text-gray-500 mt-1">
          Kelola dan lihat informasi detail semua akun pengguna terdaftar.
        </p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-2xl border border-gray-100">

        <div class="hidden md:grid grid-cols-6 gap-4 py-3 px-4 border-b border-gray-200 text-sm font-semibold uppercase text-gray-600 tracking-wider mb-4">
          <div class="col-span-1">
            Akun
          </div>
          <div class="col-span-2">
            Nama Pengguna
          </div>
          <div class="col-span-2">
            Email
          </div>
          <div class="col-span-1 text-right">
            Tanggal Daftar
          </div>
        </div>

        @foreach ($user as $u)
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mb-4 transition duration-300 hover:shadow-md hover:border-indigo-300 md:grid md:grid-cols-6 md:gap-4 md:items-center">

          <div class="col-span-1 flex items-center space-x-3 mb-2 md:mb-0">
            <div class="w-10 h-10 flex items-center justify-center text-2xl font-bold text-white bg-indigo-500 rounded-full flex-shrink-0 shadow-md">
              {{ strtoupper(substr($u['name'], 0, 1)) }}
            </div>
          </div>

          <div class="col-span-2 mb-2 md:mb-0">
            <p class="text-xs text-gray-500 md:hidden">
              Nama Pengguna :
            </p>
            <p class="text-base font-semibold text-gray-900 truncate">
              {{ $u->name }}
            </p>
          </div>

          <div class="col-span-2 mb-2 md:mb-0">
            <p class="text-xs text-gray-500 md:hidden">
              Email :
            </p>
            <p class="text-sm text-gray-700 truncate">
              {{ $u->email }}
            </p>
          </div>

          <div class="col-span-1 text-left md:text-right">
            <p class="text-xs text-gray-500 md:hidden">
              Daftar :
            </p>
            <p class="text-sm font-medium text-gray-600">
              <i class="fas fa-calendar-alt text-indigo-400 mr-1 hidden sm:inline"></i>
              {{ $u->created_at->format('d F Y') }}
            </p>
          </div>
        </div>
        @endforeach

      </div>

    </main>

    @include('components.footer')

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