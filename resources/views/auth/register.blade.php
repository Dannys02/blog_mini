<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registet</title>
</head>
<body>
  <form action="/register" method="post">
    @csrf
    <h1>Register</h1>
    
    <input type="text" name="name" value="{{ old("name") }}" placeholder="Name" /><br /><br />
    @error("name")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <input type="email" name="email" value="{{ old("email") }}" placeholder="Email" /><br /><br />
    @error("email")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <input type="password" name="password" value="{{ old("password") }}" placeholder="Password" /><br /><br />
    @error("password")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <button type="submit">Register</button>
    <p>Punya akun?<a href="/login">Login sekarang</a></p>
  </form>
</body>
</html>