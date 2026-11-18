<!DOCTYPE html>
<html>
<head>
    <title>Input Sanitization</title>
</head>
<body>

<h2>User Input Form</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

<?php
if(isset($_POST['submit']))
{
    $name = filter_input(INPUT_POST, "name",
             FILTER_SANITIZE_SPECIAL_CHARS);

    $email = filter_input(INPUT_POST, "email",
              FILTER_SANITIZE_EMAIL);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
