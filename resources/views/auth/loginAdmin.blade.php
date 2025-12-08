<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
</head>
<body>
  <form action="/admin/login" method="post">
    @csrf

    <h1>Login Admin</h1>
    <input type="text" name="email" value="{{ old("email") }}" placeholder="Email" /><br /><br />
    @error("email")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <input type="password" name="password" value="{{ old("password") }}" placeholder="Password" /><br /><br />
    @error("password")
      <span>{{ $message }}</span><br /><br />
    @enderror
    
    <button type="submit">Login</button>
  </form>
</body>
</html>