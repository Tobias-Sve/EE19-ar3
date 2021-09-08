<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variablar i PHP</h1>
    <?php
    $förnamn = "Tobias";
    $efternamn = "Riiser";
    echo "Mitt namn är $förnamn $efternamn <br>";
    echo "Today's date is " . date("D/M - Y");

    echo "<p>";
    setlocale(LC_ALL, "sv_SE.utf8");
    echo "Dagens datumn är " . strftime("%A %B %Y");
    echo "</p>";
    ?>
</body>
</html>