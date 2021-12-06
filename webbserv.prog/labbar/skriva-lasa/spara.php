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
        <h1 class="display-4">Tack för ditt meddelande</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lasa.php">Läsa</a>
            </li>
        </ul>
        <?php
        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);

        if ($rubrik && $meddelande && $namn) {
            // Namn filen som sparas
            $filnamn = "gastbok.txt";

            //Läs in datumn
            setlocale(LC_ALL, "sv_SE.utf8");
            $datum = strftime("%H:%M:%S %A %d %b %Y");

            // Sätt samman texten
            $texten = "<h3>$rubrik</h3>\n" .
                "<h3>$datum</h3>\n" .
                "<p>$meddelande</p>\n" .
                "<p>$namn<p/>";

            //Släng in texten i text filen
            file_put_contents($filnamn, $texten, FILE_APPEND);

            //Skriv på hemsidan att det är genomfört
            echo "<p class=\"alert alert-success\">Great success! Ditt meddelande har sparats i en textfil!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">This is not a veri nice... Du glömde ett fält</p>";
        }





        ?>
    </div>
</body>
</html>