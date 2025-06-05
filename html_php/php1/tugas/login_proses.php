<?php
session_start();

// Username dan password yang benar (misalnya admin/12345)
$valid_username = "fikri";
$valid_password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;  // Menyimpan session
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div style='text-align:center; color:red;'>Login gagal. <a href='login.php'>Coba lagi</a></div>";
    }
} else {
    echo "Akses tidak valid.";
}
?>
