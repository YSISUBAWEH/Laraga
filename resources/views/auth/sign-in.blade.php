<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in to Babagram</title>
  <link rel="stylesheet" href="{{asset('archives/css/auth.css')}}">
</head>
<body>
  <div class="wrapper">
    <form action="{{route('N.inP')}}" method="post">
      @csrf
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name='email' required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="{{route('N.up1')}}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>