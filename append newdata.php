<?php
$file=fopen("Student.txt","a");
if($file) {
    $data="name:rahul.course:BCA,age:20\n";
    fwritten($file.$data);
    fclose($file);
    echo "Data append Successfully:";
    }
    else {
        echo "Unable to open file:";
    }
    ?>