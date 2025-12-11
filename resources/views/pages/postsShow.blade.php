<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Detail Post: {{ $posts->title }}</title>
</head>
<body class="bg-gray-100 min-h-screen p-8 md:p-12 font-sans text-gray-800">

  <div class="max-w-4xl mx-auto">

    <header class="mb-6 flex justify-between items-center">
      <a href="{{ url()->previous() }}"
        class="inline-flex gap-2 items-center text-sm font-medium text-gray-600 hover:text-indigo-600 transition duration-150">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali ke Daftar Post</span>
      </a>
    </header>

    <div class="bg-white shadow-xl rounded-lg p-8 md:p-10 border border-gray-200">

      <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4 border-b pb-3 text-gray-900">
        {{ $posts->title }}
      </h1>

      <p class="text-sm text-gray-500 mb-6">
        Dipublikasikan pada: {{ $posts->created_at->format('d F Y') }}
      </p>

      <div class="prose max-w-none text-lg leading-relaxed text-gray-700">
        {{-- Menggunakan nl2br untuk menampilkan baris baru dengan benar jika konten disimpan sebagai teks biasa --}}
        <p class="whitespace-pre-wrap">{{ $posts->content }}</p>
      </div>

      <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end">
        <a href="/admin/post/edit/{{ $posts->id }}"
          class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg transition duration-150 shadow-md">
          Edit Postingan
        </a>
      </div>

    </div>
  </div>
</body>
</html>