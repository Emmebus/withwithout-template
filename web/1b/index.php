<!DOCTYPE html>
<html>

<head>
    <title>assignment 1b</title>
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
    
<h1>Assigment 1b</h1>

<form method="GET" action="index.php">
    <p>Insert name below:</p><input type="text" name="name"><br>
    <p>Insert email below:</p><input type="text" name="email"><br>
    <p>Insert phone number below:</p><input type="text" name="phone"><br><br>
    <input type="submit" value="submit">
</form>

<br><br>

<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (empty($_GET["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_GET["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      echo "$emailErr <br><br> ";
    }
  }


if(empty($_GET['name']) or empty($_GET['email']) or empty($_GET['phone'])){
   
    echo "Form not yet sent, please fill out the form";

}else{
    $name= $_GET['name'];
    $email= $_GET['email'];
    $phone= $_GET['phone'];

    echo ("Data from form:");
    echo ("<br>Your name is $name");
    echo ("<br>Your email adress is $email");
    echo ("<br>Your phone number is $phone");

}




  
?>

</body>
</html>