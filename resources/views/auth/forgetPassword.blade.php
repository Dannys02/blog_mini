<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
</head>
<body>
  <form action="/forget-password" method="post">
    @csrf

    <h1>Lupa Password</h1>

    <input type="email" name="email" placeholder="Email" required />

    <button type="submit">Kirim Reset Link</button>

    @if(session("msg"))
      <p>{{ session("msg") }}</p>
    @endif
  <button type="submit">Kirim</button>
  </form>
</body>
</html>
