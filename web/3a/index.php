<!DOCTYPE html>
<html>
<head></head>
<body>
    
<?php

foreach($_GET as $key => $value){
    echo $key;
    echo $value;
    //echoes orderer after priority. First echo has highest priority.
    echo "<style>html {background-color: $value}</style>";
    echo "<style>html {background-color: $key}</style>";
    echo "<style>html {background-color: #$value}</style>";
    echo "<style>html {background-color: #$key}</style>";


}


 ?>
</body>

</html>

