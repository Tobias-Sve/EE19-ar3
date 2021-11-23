<?php
$rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

if ($rubrik && $text) {

    $inlägget = "<div><h2>$rubrik</h2><br>\n" . "<p>$text</p></div>";
    //Släng in text i en textfil
    file_put_contents("blogg.txt", $inlägget, FILE_APPEND);

    echo "<p>Meddelandet sparades</p>";
}
