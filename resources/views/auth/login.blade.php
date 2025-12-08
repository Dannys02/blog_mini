<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <form action="/login" method="post">
    @csrf

    <h1>Login</h1>
    <input type="text" name="email" value="{{ old("email") }}" placeholder="Email" /><br /><br />
    @error("email")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <input type="password" name="password" value="{{ old("password") }}" placeholder="Password" /><br /><br />
    @error("password")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <button type="submit">Login</button>
    <p>Tidak punya akun?<a href="/register">Register sekarang</a></p>
    <p>Lupa password?<a href="/forget-password">Sini</a></p>
  </form>
</body>
</html>