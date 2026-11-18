<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload Text or Image File</h2>

<form method="POST" enctype="multipart/form-data">

    Select File:
    <input type="file" name="file" required>
    <br><br>

    <input type="submit" name="upload" value="Upload">

</form>

<?php
if(isset($_POST['upload']))
{
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    $allowed = array("txt", "jpg", "jpeg", "png", "gif");

    if(in_array($ext, $allowed))
    {
        if(!is_dir("uploads"))
            mkdir("uploads");
        $newName = uniqid() . "." . $ext;

        if(move_uploaded_file($tmp, "uploads/" . $newName))
            echo "File uploaded successfully!";
        else
            echo "File upload failed.";
    }
    else
    {
        echo "Only text and image files are allowed.";
    }
}
?>

</body>
</html>

