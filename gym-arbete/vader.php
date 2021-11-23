<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dagens Väder</title>
    <link rel="icon" href="./bilder/sun_icon.png">
    <link rel="stylesheet" href="main.css">
    <script src="easter-eggs.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Dagens väder</h1>
            <h3 id="underrubrik">Presenteras av Tage, Tobias och Jacob</h3>
        </header>
        <main>
            <?php
            setlocale(LC_ALL, "sv_SE.utf8");
            $datum = strftime("%A %d %b %Y");
             echo "<p>";
             echo ucwords($datum);
             echo "</p>";
            ?>
        </main>
    </div>
    <footer>
        <ul>
            <li>Tage Discord = Cookiegod#4234</li>
            <li>Jacob Discord = Domaiki#3955</li>
            <li>Tobias Discord = Speed#6399</li>
        </ul>
    </footer>
</body>
</html>