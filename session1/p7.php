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
    $x = 5;

    function test()
    {
        $x = 50;
        echo "<p> x() => " . $x . "</p>";
    }

    test();

    echo "<p> x => " . $x . "</p>";
    ?>

</body>

</html>