<?php  
$mystring = 'Hello PHP';  
$findme   = 'Hello';  
$pos = strpos($mystring, $findme);  
   
if ($pos === false) {  
    echo "The string '$findme' was not found in the string '$mystring'";  
} else {  
    echo "The string '$findme' was found in the string '$mystring'";  
    echo "<br>";  
    echo " and exists at position $pos";  
}  
?>
