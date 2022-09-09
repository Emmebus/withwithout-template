<!DOCTYPE html>
<html>

<head>
    <title>assignment 1a</title>
    <style>
        html {
            background-color: teal;
        }

        * {
            text-align: center;
        }
        
    </style>
</head>

<body>
    
<h1>Assigment 1a</h1>

<form method="GET" action="index.php">
    <p>Insert name below:</p><input type="text" name="name"><br>
    <p>Insert email below:</p><input type="text" name="email"><br>
    <p>Insert phone number below:</p><input type="text" name="phone"><br><br>
    <input type="submit" value="submit">
</form>

<br><br>

<?php

if(empty($_GET['name']) or empty($_GET['email']) or empty($_GET['phone'])){
   
    echo "Please fill out the form";

}else{
    $name= $_GET['name'];
    $email= $_GET['email'];
    $phone= $_GET['phone'];

    echo ("<br>Your name is $name");
    echo ("<br>Your email adress is $email");
    echo ("<br>Your phone number is $phone");

}

?>

</body>
</html>