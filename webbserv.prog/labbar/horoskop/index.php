<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens Horoskop</h1>
        <?php
        // Hämta ner webbsidan
        $url = "https://astro.elle.se/";
        $sidan = file_get_contents($url);

        //Hitta början på horoskopet för Väduren
        $start = strpos($sidan, "Väduren");

        echo "<h3>Väduren</h3><br>";

        // Sök vidare för att hutta var texten börjar
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //Plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);

        echo "<p>$horoskop</p>";
        //Hitta början på horoskopet för Väduren
        $start = strpos($sidan, "Oxen");

        echo "<h3>Oxen</h3><br>";

        // Sök vidare för att hutta var texten börjar
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //Plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);

        echo "<p>$horoskop</p>";
        //Hitta början på horoskopet för Tvillingarna
        $start = strpos($sidan, "Tvillingarna");

        echo "<h3>Tvillingarna</h3><br>";

        // Sök vidare för att hutta var texten börjar
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //Plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);

        echo "<p>$horoskop</p>";
        //Hitta början på horoskopet för Kräftan
        $start = strpos($sidan, "Kräftan");

        echo "<h3>Kräftan</h3><br>";

        // Sök vidare för att hutta var texten börjar
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //Plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);

        echo "<p>$horoskop</p>";
        ?>
    </div>
</body>
</html>