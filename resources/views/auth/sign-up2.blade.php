<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Data Pengguna</title>
  <link rel="stylesheet" href="{{ asset('archives/css/auth.css') }}">
</head>
<body>
  <div class="wrapper">
    <form action="{{ route('N.up2') }}" method="post">
      @csrf
      <h2>Melengkapi Data Pengguna</h2>
      <div class="input-field">
        <input type="text" name="namaLengkap" required>
        <label>Enter your full name</label>
      </div>
      <div class="input-field">
        <input type="text" name="alamat" required>
        <label>Enter your address</label>
      </div>
      <button type="submit">Selesai</button>
    </form>
  </div>
</body>
</html>
