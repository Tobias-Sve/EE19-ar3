<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income OOP</title>
</head>
<body>
    <?php
    //We will register employee's saleries this month
    //Create a class named saleries 
    class Saleries {
        public $firstname = "";
        public $lastname = "";
        public $hourlyRate = 0;
        public $hoursWorked = 0;

        //Methods
        public function __construct($fName, $lName, $hourlyRate, $hoursWorked)
        {
            $this->firstname = $fName;
            $this->lastname = $fName;
            $this->hourlyRate = $hourlyRate;
            $this->hoursWorked = $hoursWorked;
        }

        public function calcSalery() {
            $salery = $this->hourlyRate * $this->hoursWorked;
            echo "<p>$this->firstname $this->lastname has earnt " . $salery . " kr</p>";
        }
    }
    //Create a new instance
    $tobiasRiiser = new Saleries("Tobias", "Riiser", 200, 400);
    $viktorLarson = new Saleries("Viktor", "Larson", 200, 50);
    //Print out the saleries
    $tobiasRiiser->calcSalery();
    $viktorLarson->calcSalery();
    ?>
</body>
</html>