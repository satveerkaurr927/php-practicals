<?php 
$str="Hello World";
echo "Original String:". $str ."<br>";
echo "Length:". Strlen($str) ."<br>";
echo "Substring:". substr( $str,0,5 )."<br>";
echo "Replace".str_replace("World","php",$str)."<br>";
echo "Position of World:".strpos($str,"World");
?>