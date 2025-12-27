<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Judul: {{ $posts->title }}</title>
</head>
<body class="relative bg-gray-100 min-h-screen p-8 md:p-12 font-sans text-gray-800">

  <div class="max-w-4xl mx-auto">

    <header class="mb-6 flex justify-between items-center">
      <a href="{{ url()->previous() }}"
        class="inline-flex gap-2 items-center text-sm font-medium text-gray-600 hover:text-indigo-600 transition duration-150">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali</span>
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
        <p class="">
          {{ $posts->content }}
        </p>
      </div>

    </div>
  </div>

  <div class="pt-12 pb-32">
    <div class="flex justify-center">
      <h1 class="relative py-2 w-fit font-extrabold tracking-tight text-2xl md:text-4xl after:absolute after:top-0 after:translate-x-[-50%] after:left-1/2 after:w-[60%] after:bg-gray-600 after:h-1 after:rounded-2xl">Komentar</h1>
    </div>

    <div class="bg-gray-100 flex flex-col gap-5 rounded-2xl py-6">

      <!-- Hanya demo -->
      <div class="flex items-start gap-2 md:gap-4">
        <div class="aspect-square h-8 md:h-10 flex justify-center items-center text-xl md:text-2xl rounded-full bg-blue-600 text-white font-bold">
          <span class="mt-0.5">D</span>
        </div>

        <article class="flex flex-col gap-1">
          <div class="flex items-center gap-2">
            <h2 class="text-sm md:text-base font-bold">Dannys Martha F</h2>
            <time datetime="PT10H" class="text-gray-800 text-sm md:text-base">
              10 jam yang lalu
            </time>
          </div>

          <p class="text-sm max-w-xs md:max-w-2xl mb-1">
            Apa maksud artikel ini, sudah tidak berfaedah, tidak sopan, dan
            miris. Awas saja, Saya beritahu mamak kau soal ini.
          </p>

          <button class="w-fit text-sm md:text-base text-gray-800 font-semibold">
            Balas
          </button>
        </article>
      </div>

      <div class="flex items-start gap-2 md:gap-4">
        <div class="aspect-square h-8 md:h-10 flex justify-center items-center text-xl md:text-2xl rounded-full bg-blue-600 text-white font-bold">
          <span class="mt-0.5">E</span>
        </div>

        <article class="flex flex-col gap-1">
          <div class="flex items-center gap-2">
            <h2 class="text-sm md:text-base font-bold">Enna Galdiona</h2>
            <time datetime="PT10H" class="text-gray-800 text-sm md:text-base">
              5 jam yang lalu
            </time>
          </div>

          <p class="text-sm max-w-xs md:max-w-2xl mb-1">
            Anda ini kenapa?
          </p>

          <button class="w-fit text-sm md:text-base text-gray-800 font-semibold">
            Balas
          </button>
        </article>
      </div>

    </div>
  </div>

  <form>
    <div class="fixed bottom-0 left-1/2 transform translate-x-[-50%] w-full bg-gray-100 border-t-2 border-indigo-200
      mt-12 px-4 py-2 overflow-hidden transition-all duration-300
      focus-within:border-indigo-600">

      <div class="flex justify-between gap-2 items-center">
        <div class="aspect-square h-9 md:h-10 flex justify-center items-center text-xl md:text-2xl rounded-full bg-blue-600 text-white font-bold">
          D
        </div>

        <input id="input" class="w-full outline-none bg-transparent resize-none
        overflow-hidden px-2 py-1 rounded-full border-2 border-gray-600"
        placeholder="Tulis komentar..." />

      <div class="aspect-square h-9 flex justify-center items-center bg-indigo-600 text-white rounded-full text-center my-2">
        <button id="kirim" type="submit">
          <i class="fa fa-paper-plane text-md"></i>
        </button>
      </div>

    </div>
  </div>
</form>
<script>
  const input = document.getElementById("input");
  const btnKirim = document.getElementById("kirim");

  input.addEventListener("input", () => {
  if (input.value.trim() === "") {
  btnKirim.disabled = true;
  } else {
  btnKirim.disabled = false;
  }
  });

  btnKirim.disabled = true;
</script>
</body>
</html>