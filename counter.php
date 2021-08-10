<?php
$myfile = fopen("../visitCount.txt", "r") or die("Unable to open file!");
$content = fread($myfile,filesize("../visitCount.txt"));
fclose($myfile);

$newCount = substr($content,1,-1) + 1;
echo $newCount;

$toWrite = "~".$newCount."~";

file_put_contents("../visitCount.txt",$toWrite);
?>
