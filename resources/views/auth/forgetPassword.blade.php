<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="relative w-full max-w-md bg-white p-10 rounded-xl shadow-2xl border border-gray-200">
    <div class="text-center mb-8">
      <i class="fas fa-question-circle text-4xl text-indigo-600 mb-2"></i>
      <h1 class="text-3xl font-extrabold text-gray-900">Lupa Password?</h1>
      <p class="text-sm text-gray-500 mt-2">Masukkan email Anda untuk menerima link reset password.</p>
    </div>
    
    <form action="/forget-password" method="post" class="space-y-6">
      @csrf

      <div>
        <label for="reset-email" class="block text-sm font-medium text-gray-700 mb-1">Email Anda</label>
        <div class="relative">
          <input 
            type="email" 
            name="email" 
            id="reset-email"
            placeholder="mail@example.com" 
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out pl-10"
          />
          <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
      </div>

      <button 
        type="submit" 
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out"
      >
        <i class="fas fa-paper-plane mr-2 mt-1"></i> Kirim Reset Link
      </button>

      @if(session("msg"))
        <p class="text-center text-sm font-medium p-3 rounded-lg bg-indigo-100 text-indigo-800">
          <i class="fas fa-info-circle mr-1"></i> {{ session("msg") }}
        </p>
      @endif
    </form>
    
    <a href="{{ url()->previous() }}"
      class="absolute top-5 left-5 inline-flex gap-1 items-center text-sm font-medium text-gray-600 hover:text-indigo-600 transition duration-150">
      <i class="fa fa-arrow-left"></i>  Kembali
    </a>
  
  </div>
</body>
</html>
