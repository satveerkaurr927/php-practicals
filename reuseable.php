<!DOCTYPE html>
<html>
<body>

<?php
class Student
{
    public $name;

    function display($n)
    {
        $this->name = $n;
        echo "Student Name: " . $this->name . "<br>";
    }
}

// Create objects
$s1 = new Student();
$s2 = new Student();

// Reuse the class
$s1->display("Rahul");
$s2->display("Aman");
?>

</body>
</html>
