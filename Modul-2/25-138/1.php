<?php
$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];
$praktikum = ["JARKOM", "PAW"];

// Mengganti count($matkul) dengan batas angka langsung yaitu 8 (karena ada 8 data)
for ($i = 0; $i < 8; $i++) {
    if (in_array($matkul[$i], $praktikum)) {
        echo "Saya sedang mengambil matkul " . $matkul[$i] . " termasuk praktikum nya<br>";
    } elseif ($i == 6 || $i == 7) {
        echo "Saya belum mengambil matkul " . $matkul[$i] . "<br>";
    } else {
        echo "Saya sudah mengambil matkul " . $matkul[$i] . " semester lalu<br>";
    }
}
?>