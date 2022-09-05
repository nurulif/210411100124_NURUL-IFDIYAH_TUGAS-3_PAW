<?php
session_start();

echo "Nama = " . $_SESSION['nama'] . "<br>";
echo "Umur = " . $_SESSION['usia'] . "<br>";
echo "Tanggal Lahir = " . $_SESSION['lahir'] . "<br>";
echo "Tinggi Badan = " . $_SESSION['tinggi'] . "<br>";
echo "Berat Badan = " . $_SESSION['berat'] . "<br>";
echo "Agama = " . $_SESSION['agama'] . "<br>";


?>