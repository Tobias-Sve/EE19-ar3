<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Testa lite php</h1>
    <?php
    echo "<p>Namnet är Tobias <br>";
    echo "Viktor har en stor pp ;)</p>";

    echo "<p>";
    echo date("l d/F - Y");
    echo "</p>";

    echo "<p>";
    setlocale(LC_ALL, "sv_SE.utf8");
    echo strftime("%A %B %Y");
    echo "</p>";
    ?>
</body>
</html>