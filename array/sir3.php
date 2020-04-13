
$string= array ( [0] => 1717#ACC Ltd. [1] => 1806#Accedian [2] => 448#Accenture, LLP )

<?php
echo "<br>";
$string = "1717,1806,448";
$str_arr = preg_split ("/\,/", $string);
print_r($str_arr);
echo "<br>";


$string = "ACC Ltd,Accedian,Accenture,LLP"; 
$str_arr = explode (",", $string);  
print_r($str_arr);

?>  
