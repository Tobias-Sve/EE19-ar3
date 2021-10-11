<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ough</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Text omvandlare</h1>
        <form action="backend.php" method="post">
            <div class="kol2">
                <label for="text">Temperatur</label>
                <textarea name="text" id="text" cols="20" rows="10"></textarea>
            </div>
            
            <div class="kol3">
                <label class="form-check-label">Enhet</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="omvandla" value="små">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Små bokstäver
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="omvandla" value="stora">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Stora bokstäver
                    </label>
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
        <?php
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
        $omvandla = filter_input(INPUT_POST, 'omvandla', FILTER_SANITIZE_STRING);

        if ($omvandla == "stora") {
            echo "<p>" . strtoupper($text) . "</p>";
        } else {
            echo "<p>" . strtolower($text) . "</p>";
        }
        
        ?>
    </div>
</body>

</html>