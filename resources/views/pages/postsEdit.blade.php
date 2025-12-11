<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'gray-400': '#9CA3AF',
            // Abu-abu (Batal)
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white text-black min-h-screen p-8 lg:p-12 font-sans">

  <div class="max-w-xl mx-auto">

    <div class="bg-white shadow-xl rounded-xl p-8 border border-gray-200">

      <div class="mb-6 border-b border-gray-300 pb-4">
        <h1 class="text-black text-2xl font-extrabold tracking-tight text-center">
          Edit Postingan
        </h1>
      </div>

      <form action=/admin/post/update/{{ $posts->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Postingan</label>
          <input
          class="w-full py-2 outline-none border border-gray-300 focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600 rounded-lg px-3 transition duration-150"
          type="text"
          name="title"
          id="title"
          placeholder="Tulis judul"
          value="{{ old('title', $posts->title) }}"
          />
        @error("title")
        <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-6">
        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
        <textarea
          class="h-40 py-2 w-full outline-none border border-gray-300 focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600 rounded-lg px-3 transition duration-150 placeholder:text-gray-400 resize-y"
          name="content"
          id="content"
          placeholder="Tulis kontenmu..."
          >{{ old('content', $posts->content) }}</textarea>
        @error("content")
        <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
      </div>

      <div class="flex gap-3">
        <button
          type="submit"
          class="py-2 px-6 bg-indigo-600 hover:bg-indigo-700 rounded-lg text-white font-semibold transition duration-200 shadow-md flex-grow"
          >
          Perbarui
        </button>
        <a
          href="/admin/post/index"
          class="py-2 px-6 bg-gray-400 hover:bg-gray-600 rounded-lg text-white font-semibold transition duration-200 shadow-md text-center"
          >
          Batal
        </a>
      </div>
    </form>

  </div>
</div>
</body>
</html>