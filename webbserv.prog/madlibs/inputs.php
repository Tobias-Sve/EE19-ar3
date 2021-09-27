<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You just got coconut-malled</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>You just got coconut-malled</h1>
        <?php
        // Ta emot data som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $adj = filter_input(INPUT_POST, 'adj', FILTER_SANITIZE_STRING);
        $sub1 = filter_input(INPUT_POST, 'sub1', FILTER_SANITIZE_STRING);
        $sub2 = filter_input(INPUT_POST, 'sub2', FILTER_SANITIZE_STRING);
        $inter = filter_input(INPUT_POST, 'inter', FILTER_SANITIZE_STRING);


        // Skriv ut texten
        echo "Mitt namn är $namn och jag är en/ett $adj $sub1. Jag har ett stort hat mot $sub2. Varenda gång jag ser någon sådan, skriker jag $inter!"
        

        ?>
        <img src="./bilder/coconut-mall.png" alt="coconut-mall">
    </div>
</body>
</html>