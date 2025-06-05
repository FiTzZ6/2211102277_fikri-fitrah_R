<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Sederhana</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: #eef2f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 360px;
      padding: 32px;
      text-align: center;
    }
    .card h2 {
      margin-bottom: 16px;
      color: #333333;
      font-size: 22px;
    }
    .card form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .card input[type="text"],
    .card input[type="password"] {
      height: 44px;
      padding: 0 12px;
      border: 1px solid #ccd0d5;
      border-radius: 8px;
      font-size: 14px;
      background: #f7f9fb;
    }
    .card input[type="text"]::placeholder,
    .card input[type="password"]::placeholder {
      color: #888;
    }
    .card button {
      height: 44px;
      border: none;
      border-radius: 8px;
      background: #007bff;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background .2s;
    }
    .card button:hover {
      background: #0056b3;
    }
    .card .footer {
      margin-top: 16px;
      font-size: 13px;
      color: #666;
    }
    .card .footer a {
      color: #007bff;
      text-decoration: none;
    }
    .card .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Sign in</h2>
    <form action="login_proses.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="footer">
      <a href="#">Forgot password?</a>
    </div>
  </div>
</body>
</html>
