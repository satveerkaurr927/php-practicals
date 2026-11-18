<?php
class Student
{
    public $name;

    // Constructor
    function __construct()
    {
        $this->name = "Rahul";
    }

    // Method
    function display()
    {
        echo "Student Name: " . $this->name;
    }
}
// Create object
$obj = new Student();

// Call method
$obj->display();
?>


