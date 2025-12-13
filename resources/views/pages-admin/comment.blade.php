<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 flex h-screen font-sans">
  @include('components-admin.sidebar')

  <div class="flex-1 flex flex-col overflow-hidden">

    @include('components-admin.header')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">

      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Kelola Komentar</h1>
        <p class="text-gray-600">
          Daftar semua komentar yang masuk pada postingan blog Anda.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Total Komentar
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                20
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
                Baru Hari Ini
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                2
              </p>
            </div>
            <div class="p-3 bg-indigo-100 rounded-full text-indigo-600">
              <i class="fas fa-chart-line text-xl"></i>
            </div>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 uppercase">
                Postingan Aktif
              </p>
              <p class="text-3xl font-bold text-gray-900 mt-1">
                1
              </p>
            </div>
            <div class="p-3 bg-blue-100 rounded-full text-blue-600">
              <i class="fas fa-book text-xl"></i>
            </div>
          </div>
        </div>

      </div>

      <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
        <div class="p-6 flex justify-between items-center border-b border-gray-100">
          <h2 class="text-xl font-semibold text-gray-800">Daftar Komentar Terbaru</h2>

          <div class="w-full max-w-xs relative ml-4">
            <input type="search" class="w-full py-2 pl-10 pr-4 text-sm text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Cari Komentar...">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="fas fa-search text-gray-400"></i>
            </div>
          </div>

        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">No</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Penulis</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700 w-2/5">Isi Komentar</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Postingan</th>
                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">

              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-semibold">
                  Budi Santoso
                </td>
                <td class="px-6 py-4 text-sm text-gray-600 max-w-sm">
                  <span class="block truncate">
                    Artikel ini sangat informatif, penjelasannya mudah dipahami. Terima kasih banyak! Saya suka sekali dengan bagian tentang energi terbarukan.
                  </span>
                </td>
                <td class="px-6 py-4 text-sm text-indigo-600 hover:text-indigo-800 transition duration-150">
                  <a href="#" target="_blank" class="font-medium">
                    Masa Depan Teknologi Hijau
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center space-x-2">
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-blue-500 hover:bg-green-600 rounded-full transition duration-150 shadow-md" title="Setujui">
                    <i class="fas fa-eye text-xs"></i>
                  </a>
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition duration-150 shadow-md" title="Edit">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </a>
                  <button type="button" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-red-500 hover:bg-red-700 rounded-full transition duration-150 shadow-md" onclick="alert('Hapus Komentar?')">
                    <i class="fas fa-trash text-xs"></i>
                  </button>
                </td>
              </tr>

              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-semibold">
                  Anonymous
                </td>
                <td class="px-6 py-4 text-sm text-gray-600 max-w-sm">
                  <span class="block truncate">
                    Saya punya pertanyaan mengenai implementasi algoritma yang dibahas, apakah ada studi kasus lain yang bisa dijadikan referensi?
                  </span>
                </td>
                <td class="px-6 py-4 text-sm text-indigo-600 hover:text-indigo-800 transition duration-150">
                  <a href="#" target="_blank" class="font-medium">
                    Pengenalan Machine Learning
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center space-x-2">
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-blue-500 hover:bg-green-600 rounded-full transition duration-150 shadow-md" title="Setujui">
                    <i class="fas fa-eye text-xs"></i>
                  </a>
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition duration-150 shadow-md" title="Edit">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </a>
                  <button type="button" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-red-500 hover:bg-red-700 rounded-full transition duration-150 shadow-md" onclick="alert('Hapus Komentar?')">
                    <i class="fas fa-trash text-xs"></i>
                  </button>
                </td>
              </tr>

              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 font-semibold">
                  Siti Aisyah
                </td>
                <td class="px-6 py-4 text-sm text-gray-600 max-w-sm">
                  <span class="block truncate">
                    Wah, saya tidak setuju dengan beberapa poin yang disampaikan. Perlu tinjauan ulang data.
                  </span>
                </td>
                <td class="px-6 py-4 text-sm text-indigo-600 hover:text-indigo-800 transition duration-150">
                  <a href="#" target="_blank" class="font-medium">
                    Analisis Pasar Keuangan 2025
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center space-x-2">
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-blue-500 hover:bg-green-600 rounded-full transition duration-150 shadow-md" title="Setujui">
                    <i class="fas fa-eye text-xs"></i>
                  </a>
                  <a href="#" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition duration-150 shadow-md" title="Edit">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </a>
                  <button type="button" class="inline-flex justify-center items-center p-2 text-sm font-medium text-white bg-red-500 hover:bg-red-700 rounded-full transition duration-150 shadow-md" onclick="alert('Hapus Komentar?')">
                    <i class="fas fa-trash text-xs"></i>
                  </button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="p-4 flex justify-between items-center border-t border-gray-100 bg-white">
          <p class="text-sm text-gray-600">
            Menampilkan 1 sampai 10 dari 20 Komentar
          </p>
          <div class="flex space-x-1">
            <button class="px-3 py-1 text-sm font-medium text-gray-500 border rounded-lg hover:bg-gray-100 disabled:opacity-50" disabled>
              Sebelumnya
            </button>
            <button class="px-3 py-1 text-sm font-medium text-white bg-indigo-600 border border-indigo-600 rounded-lg">
              1
            </button>
            <button class="px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg hover:bg-gray-100">
              2
            </button>
            <button class="px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg hover:bg-gray-100">
              3
            </button>
            <button class="px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg hover:bg-gray-100">
              Selanjutnya
            </button>
          </div>
        </div>

      </div>

    </main>

    @include('components-admin.footer')

  </div>

</body>
</html>