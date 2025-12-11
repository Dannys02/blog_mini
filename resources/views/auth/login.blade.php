<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
    <div class="text-center mb-8">
      <i class="fas fa-lock text-4xl text-indigo-600 mb-2"></i>
      <h1 class="text-3xl font-extrabold text-gray-900">Masuk ke Akun Anda</h1>
    </div>
    
    <form action="/login" method="post" class="space-y-6">
      @csrf

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <div class="relative">
          <input 
            type="email" 
            name="email" 
            id="email"
            value="{{ old("email") }}" 
            placeholder="mail@example.com"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out pl-10"
          />
          <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        @error("email")
          <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror
      </div>
      
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <div class="relative">
          <input 
            type="password" 
            name="password" 
            id="password"
            value="{{ old("password") }}" 
            placeholder="Minimal 5 karakter"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out pl-10"
          />
          <i class="fas fa-key absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        @error("password")
          <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror
      </div>
      
      <button 
        type="submit" 
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out"
      >
        <i class="fas fa-sign-in-alt mr-2 mt-1"></i> Login
      </button>
      
      <div class="text-center text-sm">
        <p class="text-gray-600">
          Tidak punya akun? 
          <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
            Register sekarang
          </a>
        </p>
        <p class="mt-2">
          Lupa password? 
          <a href="/forget-password" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
            Reset di sini
          </a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>