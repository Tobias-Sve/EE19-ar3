<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Uppgift 5</h1>
    <?php
    //Variablar
    $today = time();
    $event = mktime(0, 0, 0, 01, 03, 2028);
    $countdown = round(($event - $today)/86400);

    //Skicka ut tiden
    echo "Det är så här många dagar tills jag, Tobias Riiser, blir 25: <strong>$countdown</strong>. Vilket är 03/01/2028 ";
    ?>
    
</body>
</html>