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
    class car{
        public $color; 
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model; 
        }

        public function message($text){
            echo $text ," ", $this->color;
        }

    }    

    $test = new car("red","VOLVO"); 

    echo $test->color; 
    
    echo "<br>";

    echo $test->message("test message"); 

    ?>

</body>
</html>