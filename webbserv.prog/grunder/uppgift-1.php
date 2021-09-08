<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Uppgift 1</h1>
    <?php
    //Två variablar för namn och adress
    $namn = "Tobias Riiser";
    $adress = "Fjärilsgränd 6";

    //Mitt namn är ... jag bor på ...
    echo "Mitt namn är $namn och jag bor på $adress <br>";

    //Variablar för kön och ålder
    $kön = "Icke-binär";
    $ålder = "18";

    //Jag är en ... årig, ... bad bitch
    echo "Jag är en $ålder årig, $kön certifierad bad-bitch"; 

    ?>
</body>
</html>