<?php
    session_start();
    $_SESSION['nama'] = $_POST["nama"];
    $_SESSION['usia'] = $_POST["usia"];
    $_SESSION['lahir'] = $_POST["lahir"];
    $_SESSION['tinggi'] = $_POST["tinggi"];
    $_SESSION['berat'] = $_POST["berat"];
    $_SESSION['agama'] = $_POST["agama"];

    echo "Nama = " . $_SESSION['nama'] . "<br>";
    echo "Umur = " . $_SESSION['usia'] . "<br>";
    echo "Tanggal Lahir = " . $_SESSION['lahir'] . "<br>";
    echo "Tinggi Badan = " . $_SESSION['tinggi'] . "<br>";
    echo "Berat Badan = " . $_SESSION['berat'] . "<br>";
    echo "Agama = " . $_SESSION['agama'] . "<br>";

?>
    