<!DOCTYPE html>
<html>
    <head>
        <title>Employees Details</title>
        <head>
            <body>
                <h2>Employees Detail form</h2>
                <form method ="POST" action ="">
                    Employee Name:
                    <input type= "text"
                    name = "ename"><br><br>
                    Employee ID:
                    <input type ="text"
                    name="eid"><br><br>
                    Department:
                    <input type="text"
                    name="department"><br><br>
                    Salary
                    <input type="text"
                    name="salary"><br><br>
                    <input type="Submit"
                    value="submit">
</form>
<?php
If(isset($_POST['name'])) 
{
    echo "<h2>Employee Information</h2>";
    echo "Employee Name: ". $_POST['
    name'] . "<br>s";
    echo "Employee ID:" . 
    $_POST['eid']."<br>"; 
    echo "department: " .
     $_POST['department'] ."<br>";
    echo "Salary: ".
    $_POST['Salary']."<br>";  
    }
    ?>
    </body>
    </html>