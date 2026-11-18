<?php
$jsonData=(file_get_contents="student.json");
$student=json_decode($jsonData);
echo "student information" ($jsonData)
"<br>";
echo "roll no:"$student=>rollno."<br>";
echo "name:"$student=>name."<br>";
echo "age:"$student=>age."<br>";
echo "course:"$student=>course."<br>";
echo "marks:"$student=>marks."<br>";
?>