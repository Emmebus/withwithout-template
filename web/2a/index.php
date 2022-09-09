<!DOCTYPE html>
<html>

<head>
    <title>assignment 2a/b</title>
    <style>
        html {
            background-color: olive;
        }

        * {
            text-align: center;
        }
        
    </style>
</head>

<body>
    
<h1>Assigment 2a/b</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>Select image to upload</p>
    <input type="file" name="fileToUpload" id="fileToUpload" style="border:solid"><br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>



<br><br>

<?php

echo "Hello world";
?>

</body>
</html>