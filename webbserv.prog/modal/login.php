<?php
include "../registrering/config.php";
// Ta emot data från form
$email = filter_input(INPUT_POST, 'email');
$pw = filter_input(INPUT_POST, 'pw');

if ($email && $pw) {

    //Check the variables above
    //var_dump($pw, $email);

    //Check if $email is not already in use
    $sql = "SELECT * FROM `Register` WHERE `Email` = '$email'";

    //Kör SQL-kommandot
    $resultat = $conn->query($sql);

    //Check $resultat
    if (!$resultat) {
        echo "You died because SQL";
    } else {

        // Get the answer and make an array
        $rad = $resultat->fetch_assoc();

        //Check if $pw and the hash matches
        if (!password_verify($pw, $rad['Hash'])) {
            echo "1";
        } else {
            echo "0";
        }
    }
} else if (!$email) {
    echo "2";
}
else {
    echo "3";
}
?>