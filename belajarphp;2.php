<?php
    $namaDepan = "Januar";
    $namaBelakang = "Firnando";
    $umur = 14;
    $beratBadan = 1.21;
    $hadir = false;
    $salary = null;

    echo "Nama Lengkap = ". $namaDepan. " ".$namaBelakang;
    
    echo "<br>Nama Depan : $namaDepan";
    echo "<br> umur = $umur tahun";
    $umur = 21;
    // unset($umur);
    echo"<br> umur = $umur tahun";

    define("TEMPAT_LAHIR", "Charitas");
    
    echo "<br> Tempat Lahir = ", TEMPAT_LAHIR;

    /*
     1. Session --> $_SESSION["nama"]
     2. Cookie --> $_COOKIE["namacookie"]
     3. Post --> $_POST["npm"]
     4. Get --> $_GET["npm"]
     5. Server --> $_SERVER[];
    */
?>