<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up to Babagram</title>
  <link rel="stylesheet" href="{{ asset('archives/css/auth.css') }}">
</head>
<body>
  <div class="wrapper">
    <form action="{{ route('N.up1') }}" method="post">
      @csrf
      <h2>Register - Step 1</h2>
      <div class="input-field">
        <input type="text" name="username" required>
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" name="passwordRepeat" required>
        <label>Repeat your password</label>
      </div>
      <button type="submit">Sign Up</button>
       <div class="login">
        <p>Don't have an account? <a href="{{route('N.in')}}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
