<!DOCTYPE html>
<html>
    <head>
        <title>Student Details</title>
</head>
<body>
    <h2> Student Detail form</h2>
    <form method = "get" action="">
        Name:
        <input type="text" name="name"><br><br>
        Roll no. 
        <input type="text" name = "roll">
        <br><br>
        Course:
        <input type = "text" name="course"><br><br>
        Email:
        <input type = "email" name="email"><br><br>
        <input type = "Submit" value = "submit">
</form>
<?php
if(isset($_GET['name'])) {
    echo "<h2> Student information</h2>";
    echo"Name:" . $_GET['name'] . "<br>";
    echo"Roll no :" . $_GET['roll'] . "<br>";
    echo"Course:" . $_GET['course'] . "<br>";
    echo"Email:" . $_GET['email'] . "<br>";
}
?>
</body>
</html>
