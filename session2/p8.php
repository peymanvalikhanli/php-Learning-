<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<br> <h1>check is int</h1> <br>";

    $num = 1234;
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br>";

    $num = 12.123;
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br>";
    $num = "text";
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br> <h1>check is float</h1> <br>";

    $num = 1234;
    echo $num, "<br>";
    var_dump(is_float($num));

    echo "<br>";

    $num = 12.123;
    echo $num, "<br>";
    var_dump(is_float($num));

    echo "<br>";
    $num = "text";
    echo $num, "<br>";
    var_dump(is_float($num));

    ?>
</body>

</html>