<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift OOP</title>
</head>
<body>
    <?php
    //Make a class named
    //Add two properties, first- and lastname
    class Family {
        public $firstname = "";
        public $lastname = "";

        public function __construct($fName, $lName)
        {
            $this->firstname = $fName;
            $this->lastname = $lName;
        }
    }

    //Create two instances of Family for two of your family members
    $me = new Family("Tobias", "Riiser");
    $brother = new Family("Olliver", "Riiser");
    ?>
</body>
</html>