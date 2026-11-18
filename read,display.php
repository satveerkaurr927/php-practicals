<?php
$file=fopen("data.Txt","r");
echo fread($file);
filesize("data.txt");
fclose($file);
?>