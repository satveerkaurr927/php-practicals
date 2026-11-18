<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
$mobile = $_POST['mobile'];

    if(empty($name))
        echo "Name is required";
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Invalid Email";
    elseif(!preg_match("/^[0-9]{10}$/", $mobile))
        echo "Invalid Mobile Number";
    else
        echo "Registration Successful!";
}
?>

</body>
</html>