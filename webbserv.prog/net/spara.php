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
        <h1 class="display-4">Hejdå</h1>
        <?php
        // Ta emot data som skickas
        $ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING);
        $submask = filter_input(INPUT_POST, 'submask', FILTER_SANITIZE_STRING);
        $gw = filter_input(INPUT_POST, 'gw', FILTER_SANITIZE_STRING);

        if ($ip && $submask && $gw) {
            // Namn filen som sparas
            $filnamn = "natverk.txt";

            // Sätt samman texten
            $texten = "IP: $ip\n" .
                "Subnetmask: $submask\n" .
                "Default Gateway: $gw";

            //Släng in texten i text filen
            file_put_contents($filnamn, $texten);

            //Skriv på hemsidan att det är genomfört
            echo "<p class=\"alert alert-success\">Great success! Ditt meddelande har sparats i en textfil!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">This is not a veri nice... Du glömde ett fält</p>";
        }





        ?>
    </div>
</body>
</html>