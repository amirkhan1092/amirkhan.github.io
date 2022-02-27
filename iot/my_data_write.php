<?php
    echo $index = $_POST['index'];
    echo $value = $_POST['value'];
    $lines = file('results.txt', FILE_IGNORE_NEW_LINES);
    for($i=0;$i<sizeof($lines);$i++){
        $lines[$i] = $lines[$i]."\n";
        if($i == $index){
            $lines[$i] = $value."\n";
        }
    }
/*print_r($lines);
$lines[4]="Nandan\n";*/
file_put_contents('results.txt', implode('', $lines));
//
//$a = $_REQUEST["a_data"];
//
//$string_to_write = "$a";
//echo "<h1>$string_to_write</h1>";
//
//$myfile = fopen("file_to_read.html", "w") or die("Unable to open file!");
//fwrite($myfile, $string_to_write);
//
//$filename = getcwd() . "result.txt";
//$line_i_am_looking_for = 123;
//$lines = file( $filename , FILE_IGNORE_NEW_LINES );
//print_r($lines);
//$lines[$line_i_am_looking_for] = 'my modified line';
//file_put_contents( $filename , implode( "\n", $lines ) );
//
//fclose($myfile);
//?>