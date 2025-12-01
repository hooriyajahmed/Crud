<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body */
body {
    background: #e0e5ec;
}

/* Sidebar */
.sidebar {
    height: 100vh;
    width: 250px;
    background: #e0e5ec;
    padding: 30px 20px;
    box-shadow: 10px 10px 20px #a3b1c6, -10px -10px 20px #ffffff;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    border-radius: 0 25px 25px 0;
}

.sidebar h2 {
    color: #333;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: center;
}

.sidebar a {
    display: block;
    padding: 12px 15px;
    margin-bottom: 10px;
    color: #40a9c3;
    text-decoration: none;
    border-radius: 15px;
    box-shadow: 5px 5px 15px #a3b1c6, -5px -5px 15px #ffffff;
    transition: 0.2s;
    font-weight: 500;
}

.sidebar a:hover {
    background: #40a9c3;
    color: #fff;
}

/* Logout button */
.sidebar .logout-btn {
    background: #ff6b6b;
    color: #fff !important;
}

.sidebar .logout-btn:hover {
    background: #e55a5a;
}

/* Main Content */
.content {
    margin-left: 270px;
    padding: 40px;
}

.content h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

.content p {
    color: #666;
    font-size: 1rem;
}

/* Cards */
.card {
    background: #e0e5ec;
    padding: 25px 20px;
    border-radius: 25px;
    box-shadow: 10px 10px 20px #a3b1c6, -10px -10px 20px #ffffff;
    margin-top: 20px;
    transition: 0.3s;
}

.card:hover {
    box-shadow: 5px 5px 15px #a3b1c6, -5px -5px 15px #ffffff;
}

.card h3 {
    color: #40a9c3;
}

.card strong {
    color: #333;
}
</style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Manage Users</a>
    <a href="#">Settings</a>
    <a href="{{ route('logout') }}" class="logout-btn">Logout</a>
</div>

<div class="content">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard.</p>

    <div class="card">
        <h3>User Role: <strong>{{ Auth::user()->role }}</strong></h3>
    </div>
</div>

</body>
</html>
