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

  @include('components.sidebar')

  <div class="flex-1 flex flex-col overflow-hidden">

    @include('components.headerAdmin')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Total Artikel
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                {{ App\Models\Post::count() }}
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
                {{ App\Models\Comment::count() }}
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
                {{ App\Models\User::count() }}
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
          <a href="/admin/post/index" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 flex items-center">
            Semua Posts <i class="fas fa-arrow-right ml-1 text-xs"></i>
          </a>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">No</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700 w-full">Konten</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              @forelse ($posts as $p)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-semibold">{{ $p->title }}</td>
                <td class="px-6 py-4 text-sm text-gray-600 max-w-xs">
                  <span class="truncate block">
                    {{ $p->content }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center space-x-2">
                  <a href="/admin/post/show/{{ $p->id }}" class="inline-flex justify-center items-center px-3 py-1 text-sm font-medium text-white bg-blue-500 hover:bg-indigo-700 rounded-full transition duration-150 shadow-md">
                    Detail
                  </a>
                  <a href="/admin/post/edit/{{ $p->id }}" class="inline-flex justify-center items-center px-3 py-1 text-sm font-medium text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition duration-150 shadow-md">
                    Edit
                  </a>
                  <form action="/admin/post/delete/{{ $p->id }}" method="post" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex justify-center items-center px-3 py-1 text-sm font-medium text-white bg-red-500 hover:bg-red-700 rounded-full transition duration-150 shadow-md" onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                      Hapus
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="py-4">
                  <h3 class="text-center text-lg font-semibold text-gray-900">Belum Ada Postingan</h3>
                  <p class="text-center text-sm text-gray-500">
                    Silakan buat postingan pertama Anda sekarang.
                  </p>
                </td>
              </tr>
              @endforelse
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