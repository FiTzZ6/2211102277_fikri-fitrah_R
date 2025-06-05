<?php
echo "Hello, PHP!<br>";



$nama = "Mbak F";
$umur = 22;
echo "Halo, nama saya $nama dan saya berumur $umur tahun.<br>";


$a = 10;
$b = 5;
echo $a + $b;


$nilai = 80;
if ($nilai >= 75) {
    echo "<br> Lulus";
} else {
    echo "<br> Tidak Lulus";
}

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "<br> Hari ini Senin<br>";
        break;
    case "Selasa":
        echo " <br> Hari ini Selasa<br>";
        break;
    default:
        echo " <br> Hari tidak diketahui<br>";
}


for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}


$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}

$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}

$hewan = ["Kucing", "Anjing", "Burung"];
echo $hewan[0];
?>

<center>
    <h1>GET</h1>
    <form method="GET" action="proses_get.php">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
</center>

<center>
    <h1>POST</h1>
    <form method="POST" action="proses_post.php">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
</center>