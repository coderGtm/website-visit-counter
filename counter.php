<?php
$filename = "../visitCount.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");
$content = fread($myfile,filesize($filename));
fclose($myfile);

$newCount = substr($content,1,-1) + 1;

$toWrite = "~".$newCount."~";

file_put_contents($filename,$toWrite);
?>
