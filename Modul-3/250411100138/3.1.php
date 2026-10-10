<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");
echo "1.1 Nilai dengan indeks tertinggi: " . end($fruits) . "<br>";

unset($fruits[1]);
echo "1.2 Nilai dengan indeks tertinggi: " . end($fruits) . "<br>";
?>