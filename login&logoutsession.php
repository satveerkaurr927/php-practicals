<!DOCTYPE html>
<html>
<head>
    <title>login and logout</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username'];
} 
if(isset($_POST['logout']))
    {
        session_destroy();
        header("location:
        login&logoutsession.php");
        exit();
    }
if(!isset($_SESSION['username']))
     {
        ?>
<form method="POST">
    username:<input type="text" name="username"
    required><br><br>
    password=<input type ="password" name="password"
    required><br><br>
    <input type="submit" name="login" value="login"></form>
    <?php
}
 else 
    {
        
 echo "welcome" . ($_SESSION['username']) ."<br>";
?>
<form method="POST">
    <input type="Submit name="logout" value="logout:</form>
<?php
}
?>
</body>
</html>
