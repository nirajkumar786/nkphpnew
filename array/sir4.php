<?php
$arr = Array (
    "0" => "1717#ACC Ltd",
    "1" => "1806#Accedian",
    "2" => "448#Accenture, LLP "
    );
foreach($arr as $val) {
   $val = trim($val,'[]');
   $temp = explode('#', $val);
   $array1[] = $temp[0];
   $array2[] = $temp[1];
}
echo '<pre>';
print_r($array1);
print_r($array2);
?>

