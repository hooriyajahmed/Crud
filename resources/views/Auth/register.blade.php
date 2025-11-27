<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: #e0e5ec;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.register-container {
  background: #e0e5ec;
  border-radius: 25px;
  box-shadow: 10px 10px 20px #a3b1c6, -10px -10px 20px #ffffff;
  padding: 50px 40px;
  width: 360px;
  text-align: center;
}

.profile-img {
  width: 90px;
  height: 90px;
  margin: 0 auto 20px;
  border-radius: 50%;
  background: url('https://picsum.photos/200') center/cover no-repeat;
  box-shadow: inset 6px 6px 10px rgba(163,177,198,0.5), inset -6px -6px 10px rgba(255,255,255,0.5);
}

h2 {
  color: #333;
  font-size: 1.4rem;
  margin-bottom: 5px;
}

p {
  font-size: 0.95rem;
  color: #666;
  margin-bottom: 25px;
}

.input-field {
  position: relative;
  margin-bottom: 20px;
}

.input-field input {
  width: 100%;
  padding: 12px 15px 12px 40px;
  border: none;
  border-radius: 15px;
  background: #e0e5ec;
  box-shadow: inset 6px 6px 10px #a3b1c6, inset -6px -6px 10px #ffffff;
  font-size: 0.95rem;
  color: #333;
  outline: none;
}

.input-field i {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 0.95rem;
  color: #888;
}

.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 20px;
  background: #40a9c3;
  color: white;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 5px 5px 15px #a3b1c6, -5px -5px 15px #ffffff;
  transition: 0.2s;
}

.btn:hover {
  background: #3a97af;
}

.message {
  margin-bottom: 15px;
  font-size: 0.9rem;
  color: green;
}

.error {
  font-size: 0.85rem;
  color: #FF5555;
  margin-bottom: 15px;
  text-align: left;
}

.options {
  margin-top: 15px;
  font-size: 0.85rem;
  color: #555;
}

.options a {
  color: #111;
  text-decoration: none;
  font-weight: 600;
}
</style>

</head>
<body>

<div class="register-container">

  <div class="profile-img"></div>

  <h2>Create Your Account</h2>

  <form action="{{ route('registeruser') }}" method="POST">
      @csrf

  <div class="input-field">
    <i>👤</i>
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
    @error('name')
        <small class="error">{{ $message }}</small>
    @enderror
  </div>

  <div class="input-field">
    <i>📧</i>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    @error('email')
        <small class="error">{{ $message }}</small>
    @enderror
  </div>

  <div class="input-field">
    <i>🔒</i>
    <input type="password" name="password" placeholder="Password" >
    @error('password')
        <small class="error">{{ $message }}</small>
    @enderror
  </div>

  <button class="btn" type="submit">Register</button>

  <div class="options">
    Already have an account? <a href="{{ route('loginpage') }}">Login</a>
  </div>
  </form>
</div>

</body>
</html>
