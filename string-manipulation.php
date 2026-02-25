<?php
$str = "Hello World";

$length = strlen($str);
$upper = strtoupper($str);
$lower = strtolower($str);
$reverse = strrev($str);

$replace = str_replace("World", "PHP", $str);

echo "Original String: $str<br>";
echo "Length: $length<br>";
echo "Uppercase: $upper<br>";
echo "Lowercase: $lower<br>";
echo "Reversed: $reverse<br>";
echo "After Replace: $replace<br>";
?>