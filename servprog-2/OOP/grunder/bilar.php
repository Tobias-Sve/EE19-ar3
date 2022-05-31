<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars OOP</title>
</head>
<body>
    <?php
    //Create a class named Car
    class Car {
        public $model = "";
        public $price = 0;
        public $color = "";
        public $modelYear = 0;
        
        public function __construct($m, $p, $c, $mY)
        {
            $this->model = $m;
            $this->price = $p;
            $this->color = $c;
            $this->modelYear = $mY;
        }
        
        public function Summarize() {
            echo "<p>Model: $this->model<br>Price: $this->price<br>Color: $this->color<br>Model year: $this->modelYear";
        }
    }
    $car1 = new Car("VW", 47000, "Gray", 2005);

    $car2 = new Car("Skoda", 23000, "Green", 1998);

    $car1->Summarize();
    $car2->Summarize();

    //Lower price on Skoda
    $car2->price += 19000;
    ?>
</body>
</html>