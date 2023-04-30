<?php
    // Teks yang akan dicari
    $teks = "Ini adalah sebuah contoh teks.";

    // Kata kunci yang dicari
    $kata_kunci = "sebuah";

    // Mencari kata kunci dalam teks
    $posisi = strpos($teks, $kata_kunci);

    // Memeriksa apakah kata kunci ditemukan dalam teks
    if ($posisi === false) {
        echo "Kata kunci tidak ditemukan dalam teks.";
    } else {
        echo "Kata kunci ditemukan pada posisi " . $posisi . " dalam teks.";
    }
?>
