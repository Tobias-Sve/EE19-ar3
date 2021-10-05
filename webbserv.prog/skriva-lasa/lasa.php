<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="gastbok.php">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Läsa</a>
            </li>
        </ul>
        <?php
        //Filnamn
        $filnamn = "gastbok.txt";

        //Texten att spara
        $texten = file_get_contents($filnamn);

        //Skriv ut allt
        echo $texten;
        ?>
    </div>
</body>
</html>