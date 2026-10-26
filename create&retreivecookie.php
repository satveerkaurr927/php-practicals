<?php
setcookie("Username","Satveer",time(),3600,",");
if (isset($_COOKIE["username"])) {
} else {
    echo "COOKIE created successfully.Refresh the page to see its value.";
}
?>