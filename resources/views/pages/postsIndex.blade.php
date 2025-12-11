<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 flex h-screen overflow-hidden font-sans">
  @include('components.sidebar')
  <div class="flex-1 flex flex-col overflow-hidden">
    @include('components.headerAdmin')
    <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
      <header class="mb-8 lg:mb-12 border-b border-gray-300 pb-4">
        <h1 class="text-dark-text text-3xl font-extrabold tracking-tight text-center">
          List Post
        </h1>
        <p class="text-gray-500 text-center italic text-sm mt-1">
          Daftar semua postingan yang tersedia.
        </p>
      </header>

      <div class="flex w-full mb-2">
        <a href="/admin/post/create" class="px-4 py-1 text-white text-center rounded-xl bg-blue-600">
          + Buat
        </a>
      </div>

      <div class="bg-white shadow-xl rounded-xl overflow-hidden border border-gray-200">
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
    </div>
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