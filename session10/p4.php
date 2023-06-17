<?php
$cookie_name = "name";
$cookie_value = "ali";
setcookie($cookie_name, $cookie_value, time() + (86400 + 30), "/");
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
            echo "";
        ?>
    </h1>
</body>

</html>