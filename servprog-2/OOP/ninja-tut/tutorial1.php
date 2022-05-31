<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Tutotial</title>
    <link rel="stylesheet" href="../../bootstrap.min.css">
</head>
<body>
    
<?php

class User {

    public $username = "Gamer";
    public $email = "gaming.gamer@gmail.com";

    //Constructor
    public function __construct($username, $email) {
        $this->username = $username;        
        $this->email = $email;       
    }

    public function addFriend() {
        return "Added a new friendo";
    }

}

//Create a user one
$userOne = new User("Tobias", "tob@gmail.com");
//Create a user two
$userTwo = new User("vitkro", "viktor@emalicl.como");

echo "<p>" . get_class($userOne) . "</p>";

echo "<p>" . get_class($userTwo) . "</p>";

//Get the properties from User class
echo $userOne->username . "<br>";
echo $userTwo->email . "<br>";
?>
</body>
</html>