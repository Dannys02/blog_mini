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
<body class="bg-gray-100 p-8 md:p-12 font-sans text-gray-800 font-sans">

  <div class="max-w-4xl mx-auto mb-4">

    <header class="mb-6 flex justify-between items-center">
      <a href="/#artikel"
        class="inline-flex gap-2 items-center text-sm font-medium text-gray-600 hover:text-indigo-600 transition duration-150">
        <i class="fas fa-arrow-left"></i>
        <span>Kembali</span>
      </a>
    </header>
    
    <div class="bg-white shadow-xl rounded-lg p-8 md:p-10 border border-gray-200">

      <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4 border-b pb-3 text-gray-900">
        {{ $posts->title }}
      </h1>
      <p class="text-sm text-gray-500 mb-4">
        Dipublikasikan pada: {{ $posts->created_at->format("d F Y") }}
      </p>
      <div class="text-gray-700 border border-gray-300 bg-gray-50 text-gray-800 rounded-2xl p-4">
        <p class="text-sm"> {{ $posts->content }} </p>
      </div>
      
    </div>
  </div>
  
  <div class="bg-white shadow-xl rounded-lg p-8 md:p-10 border border-gray-200 mb-4">
    <h1 class="tracking-tight text-3xl md:text-4xl text-black font-extrabold mb-6">Komentar :</h1>
    <div class="w-full">
      <p class="text-center">Tidak ada komentar.</p>
    </div>
  </div>

  <form action="" method="post" class="w-full mx-auto inset-x-0 bg-white p-6 rounded-xl shadow-lg border border-gray-200">
    @csrf
    <div class="mb-4">
      <textarea
        name="comment"
        id="comment"
        placeholder="Tulis komentar Anda..."
        rows="4"
        class="w-full p-3 outline-none border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out resize-none text-gray-700 placeholder-gray-500"
        ></textarea>
    </div>
    <button
      type="submit"
      class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-150 ease-in-out shadow-md hover:shadow-lg"
      >
      Kirim Komentar
    </button>
  </form>


</body>
</html>