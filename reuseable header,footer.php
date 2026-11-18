file 1:header.php
<?php
echo "<h1>Welcome to my website</h1>";
echo "<br>";
?>
file 2:footer.php
<?php
echo "<br>";
echo "copyright 2026";
?>
file 3:index.php
<?php
include 'header.php';
echo "<h2>Homepage</h2>";
echo "Welcome to our website";
include 'footer.php';
?>
