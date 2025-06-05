<?php session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
} ?>
<center>
    <h1>login</h1>
    <form method="POST" action="proses_login.php">
        Username: <input type="text" name="username" required> <br>
        Password: <input type="password" name="password" required> <br>
        <input type="submit" value="Login">
    </form>
</center>