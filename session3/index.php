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
    $h = Date("H");

    // $h = 9;
    // $h =10; 
    // $h = 23;

    if ($h < 10) {
        echo "Have a good morning ";
    } else if ($h < 20) {
        echo "Have a good day";
    } else {
        echo "have a good night!";
    }
    ?>

</body>

</html>