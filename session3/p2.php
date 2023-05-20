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
    $num = 1;
    while ($num <= 5) {
        echo $num, "<br>";
        $num++;
    }

    echo "<br><hr><br>";

    $num = 0;
    while ($num <= 100) {
        echo $num, "<br>";
        $num += 10;
    }

    echo "<br><hr><br>";

    $i = 0;

    while ($i <= 100) {
        if ($i % 2 == 0)
            echo $i, "<br>";
        $i++;
    }
    echo "<br><hr><br>";

    $i = 0;

    while ($i <= 100) {
        if ($i % 2 != 0)
            echo $i, "<br>";
        $i++;
    }

    echo "<br><hr><br>";

    $i = 0;

    while ($i <= 100) {
        echo $i, "<br>";
        $i += 2;
    }
    ?>
</body>

</html>