<?php
session_start(); 
if (isset($_REQUEST["name"]) && $_REQUEST["name"] != ""){
    $_SESSION["name"] = $_REQUEST["name"]; 
}

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
        <?php 
            if(isset($_SESSION["name"])){
                echo $_SESSION["name"]; 
            }else{
                echo "name is not set"; 
            }
        ?>
    </h1>
</body>
</html>