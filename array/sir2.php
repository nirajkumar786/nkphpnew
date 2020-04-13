<?php 
  
// Use preg_split() function 
$string = "123,456,78,000";  
$str_arr = preg_split ("/\,/", $string);  
print_r($str_arr); 
      
// use of explode 
$string = "123,46,78,000"; 
$str_arr = explode (",", $string);  
print_r($str_arr); 
?> 
