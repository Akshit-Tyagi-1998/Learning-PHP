<?php


$arr1 = [1, 'raj', 'kaj', 'baj', 23, 12];
// print_r($arr1);

// for ($i = 0; $i < sizeof($arr2); $i++) {
//   echo ("{$i} place: " . $arr2[$i] . "<br/>");
// }

$str1 = implode('-', $arr1);
echo ($str1);

$str2 = "Tyagi";
$arr = explode('a', $str2);
print_r($arr);


$arr2 = ["akshit" => 27, "ayushi" => 24, "arpit" => 20];




$arr3 = array_keys($arr2);
print_r($arr3);
