<?php
$cookie_name = "name";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() -300, "/");
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
        if (isset($_COOKIE["name"]))
            echo $_COOKIE["name"];
        else
            echo "not set data";
        ?>
    </h1>
</body>

</html>