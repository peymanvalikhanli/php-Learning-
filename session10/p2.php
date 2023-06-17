<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        user name is 
        <?php
        if(isset($_SESSION["name"])){
        echo $_SESSION["name"]; 
        }else{
            echo ""; 
        }
        ?>
    </h1>
</body>
</html>