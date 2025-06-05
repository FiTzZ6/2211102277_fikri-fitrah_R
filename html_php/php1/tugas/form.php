<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Form Nama & Umur</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                text-align: center;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 300px;
            }
            h2 {
                color: #333;
            }
            p {
                font-size: 18px;
                color: #555;
            }
            form input[type="text"], form input[type="number"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            form input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #5cb85c;
                border: none;
                border-radius: 5px;
                color: white;
                cursor: pointer;
                font-size: 16px;
            }
            form input[type="submit"]:hover {
                background-color: #4cae4c;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Halo, <?php echo $nama; ?>!</h2>
            <p>Umur: <?php echo $umur; ?> tahun</p>
            <?php
            if ($umur >= 18) {
                echo "<p>Status: Dewasa</p>";
            } else {
                echo "<p>Status: Belum Dewasa</p>";
            }
            ?>
            <br>
            <a href="form.php">Kembali ke Form</a>
        </div>
    </body>
    </html>

    <?php
} else {
    // Form belum dikirim
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Form Nama & Umur</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                text-align: center;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 300px;
            }
            h2 {
                color: #333;
            }
            form input[type="text"], form input[type="number"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            form input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #5cb85c;
                border: none;
                border-radius: 5px;
                color: white;
                cursor: pointer;
                font-size: 16px;
            }
            form input[type="submit"]:hover {
                background-color: #4cae4c;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Form Input</h2>
            <form action="form.php" method="post">
                Nama: <input type="text" name="nama" required><br><br>
                Umur: <input type="number" name="umur" required><br><br>
                <input type="submit" value="Kirim">
            </form>
        </div>
    </body>
    </html>

    <?php
}
?>
