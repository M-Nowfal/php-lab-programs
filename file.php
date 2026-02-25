<?php
$file = "sample.txt";

// ---------- WRITE ----------
$writeData = "This is written using fwrite().\n";
$writeFile = fopen($file, "w");   // 'w' = write mode
fwrite($writeFile, $writeData);
fclose($writeFile);

// ---------- APPEND ----------
$appendData = "This line is appended.\n";
$appendFile = fopen($file, "a");  // 'a' = append mode
fwrite($appendFile, $appendData);
fclose($appendFile);

// ---------- READ ----------
$readFile = fopen($file, "r");    // 'r' = read mode
$content = fread($readFile, filesize($file));
fclose($readFile);

// ---------- DISPLAY ----------
echo "<h3>File Content:</h3>";
echo nl2br($content); // show new lines properly
?>