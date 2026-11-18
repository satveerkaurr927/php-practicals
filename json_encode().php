<?php
$student=array (
    "Roll no"=>101.
    "name"=>"rahul",
    "age" =>20;
    "course" =>"BCA",
    "marks" =>85,
    $json Data=json_encode($student,json_PRETTY_PRINT);
    file_put_content("student.json",$jsonData);
    echo "student information stored successfully";
)
?>