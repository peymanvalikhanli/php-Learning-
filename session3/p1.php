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
    $color = " red ";

    switch (trim($color)) {
        case "red":
            echo "selected red";
            break;
        case "green":
            echo "selected green";
            break;
        case "blue":
            echo "selected blue";
            break;
        default:
            echo "any";
    }
    ?>
</body>

</html>