<?php




$a = $_REQUEST["a_data"];

$string_to_write = "$a";
echo "<h1>$string_to_write</h1>";

$myfile = fopen("file_to_read.html", "w") or die("Unable to open file!");
fwrite($myfile, $string_to_write);

fclose($myfile);
?>