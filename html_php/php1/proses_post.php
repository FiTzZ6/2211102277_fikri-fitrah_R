<?php

session_start();
$_SESSION['nama'] = $_POST['nama'];

echo "Nama: " . $_SESSION['nama'];
?>