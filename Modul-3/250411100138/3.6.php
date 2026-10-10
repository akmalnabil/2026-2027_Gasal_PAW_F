<?php
$arr1 = ["A"];
echo 'Array awal: ("A")<br>';
array_push($arr1, "B");
echo 'Hasil array_push: ' . implode(" ", $arr1) . '<br><br>';

$arr2a = ["A", "B"];
$arr2b = ["C"];
echo 'Array awal: ("A", "B") digabung dengan ("C")<br>';
$res_merge = array_merge($arr2a, $arr2b);
echo 'Hasil array_merge: ' . implode(" ", $res_merge) . '<br><br>';

$arr3 = ["X" => 1, "Y" => 2];
echo 'Array awal: ("X" => 1, "Y" => 2)<br>';
$res_values = array_values($arr3);
echo 'Hasil array_values: ' . implode(" ", $res_values) . '<br><br>';

$arr4 = ["A", "B", "C"];
echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
$res_search = array_search("B", $arr4);
echo 'Hasil array_search: ' . $res_search . '<br><br>';

$arr5 = [0, 1, false, 2, "", 3, "array"];
echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';
$res_filter = array_filter($arr5);
echo 'Hasil array_filter: ' . implode(" ", $res_filter) . '<br><br>';

$arr6 = [3, 1, 2];
echo 'Array awal: (3, 1, 2)<br>';
sort($arr6);
echo 'Hasil sort: ' . implode(" ", $arr6) . '<br>';
rsort($arr6);
echo 'Hasil rsort: ' . implode(" ", $arr6) . '<br><br>';

$arr7 = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo 'Array awal: ("Peter"=>35, "Ben"=>37, "Joe"=>43)<br>';

$temp = $arr7; asort($temp);
echo 'Hasil asort: '; foreach($temp as $k=>$v) echo "$k=>$v, "; echo '<br>';

$temp = $arr7; ksort($temp);
echo 'Hasil ksort: '; foreach($temp as $k=>$v) echo "$k=>$v, "; echo '<br>';

$temp = $arr7; arsort($temp);
echo 'Hasil arsort: '; foreach($temp as $k=>$v) echo "$k=>$v, "; echo '<br>';


$temp = $arr7; krsort($temp);
echo 'Hasil krsort: '; foreach($temp as $k=>$v) echo "$k=>$v, "; echo '<br>';
?>