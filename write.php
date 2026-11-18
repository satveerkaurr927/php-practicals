<?php
$file=fopen("data.Txt","w");
Fwrite($file,"Hello,welcome to php!");
Fclose($file);
echo "Data Written Successfully";
?>