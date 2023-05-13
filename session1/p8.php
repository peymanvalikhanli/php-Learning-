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
    $x = 10;
    $y = 15;

    function test()
    {
        global $x, $y;
        $y = $x + $y;
    }

    test();
    echo $y;

    echo "<br>";

    function test2()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    test2();
    echo $y;
    ?>
</body>

</html>