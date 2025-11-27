<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
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

.container {
  background: #e0e5ec;
  border-radius: 25px;
  padding: 50px 40px;
  text-align: center;
  width: 360px;
  box-shadow: 10px 10px 20px #a3b1c6, -10px -10px 20px #ffffff;
}

h1 {
  font-size: 1.8rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 10px;
}

p {
  font-size: 0.95rem;
  color: #666;
  margin-bottom: 25px;
}

.btn {
  display: block;
  width: 100%;
  padding: 12px;
  border-radius: 20px;
  font-size: 1rem;
  font-weight: 600;
  margin: 10px 0;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  box-shadow: 5px 5px 15px #a3b1c6, -5px -5px 15px #ffffff;
  transition: 0.2s;
}

.btn-login {
  background: #40a9c3;
  color: #fff;
}

.btn-login:hover {
  background: #3a97af;
}

.btn-register {
  background: #e0e5ec;
  color: #40a9c3;
  border: 2px solid #40a9c3;
}

.btn-register:hover {
  background: #40a9c3;
  color: #fff;
}
</style>

</head>
<body>

<div class="container">
    <h1>Welcome</h1>
    <p>Start your journey by creating an account or login to continue.</p>


    <a href="{{ route('loginpage') }}" class="btn btn-login">Login</a>
    <a href="{{ route('registerpage') }}" class="btn btn-register">Register</a>

</div>

</body>
</html>
