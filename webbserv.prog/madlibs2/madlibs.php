<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adj = filter_input(INPUT_POST, 'adj', FILTER_SANITIZE_STRING);
        $ingVerb = filter_input(INPUT_POST, 'ingVerb', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $numb = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bPart = filter_input(INPUT_POST, 'bodyPart', FILTER_SANITIZE_STRING);

        // Kolla att det finns något i alla rutor
        if ($adj && $ingVerb && $food && $noun && $numb && $bPart) {
            //Slumpa fram 2 verb
            $verbArr = ["fuck", "lay", "screw", "shag", "bang", "bonk", "do", "get on", "hump", "fornicate", "mate", "score", "eff", "have sex", "be intimate", "sleep with", "get laid", "embrace", "canoodle", "have sexual relations", "69"];

            $verb1 = $verbArr[rand(0, 21)];
            $verb2 = $verbArr[rand(0, 21)];
            //Skriv ut texten
            echo "<p>" . "<strong>Mario:</strong> What a/an $adj day, eh Luigi? The perfect day for $ingVerb some Koopas. The $food Kingdom is crawling with them!" . "</p>";
            echo "<p>" . "<strong>Luigi:</strong> You're right about that, dear $noun. I hope you're ready to $verb1" . "</p>";
            echo "<p>" . "<strong>Mario:</strong>Ready? I've waited $numb years to $verb2 that scoundrel Bowser!" . "</p>";
            echo "<p>" . "<strong>Luigi:</strong>Pipe down. He has $bPart everywhere" . "</p>";
        }

        ?>
    </div>
</body>

</html>