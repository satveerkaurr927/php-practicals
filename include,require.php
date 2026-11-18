file 1: message.php
<?php
echo "welcome to PHP programming"
?>


file 2: index.php
<?php
include 'message.php';
echo "br>";
require 'message.php';
?>

