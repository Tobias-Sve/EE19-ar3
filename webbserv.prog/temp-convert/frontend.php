<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>

<body>
    <div class="kontainer">
        <h1>Hur varmt är det?</h1>
        <form action="backend.php" method="post">
            <div class="kol2">
                <label>Temperatur</label>
                <input type="number" name="temp">
            </div>
            
            <div class="kol3">
                <label class="form-check-label">Enhet</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="enhet" value="cel">
                    <label class="form-check-label" for="flexRadioDefault1">
                        C° till F°
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="enhet" value="far">
                    <label class="form-check-label" for="flexRadioDefault2">
                        F° till C°
                    </label>
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>