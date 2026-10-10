<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Melon", "Mango", "Papaya", "Banana");

$arrlength = count($fruits); 
echo "Panjang array saat ini: " . $arrlength . "<br><br>";

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}
?>